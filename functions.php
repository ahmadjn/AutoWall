<?php

use duzun\hQuery;
use RyanChandler\Blade\Blade;

function is_cli()
{
    return php_sapi_name() == "cli";
}

function scrape($web, $file)
{
    $curl = new Zebra_cURL();
    $curl->ssl(true, 2, __DIR__ . '/cacert-2022-07-19.pem');
    return $curl->get(($web), function ($result) use ($file) {
        if ($result->response[1] == CURLE_OK) {
            if ($result->info['http_code'] == 200) {
                $data = minify_html($result->body);
                $data = gzencode($data, 9);
                file_put_contents($file, $data);
            } else {
                trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
            }
        } else {
            trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
        }
    });
}

function get_url($web)
{
    $url = $web;

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36");
    curl_setopt($curl, CURLOPT_REFERER, 'https://www.google.com/');
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = minify_html(curl_exec($curl));
    curl_close($curl);

    return $resp;
}

function view($template, $data = [], $echo = true)
{
    $theme = THEME_NAME;
    $data['layout'] = "theme.{$theme}.layout";

    if ($template !== 'pages.page') {
        $template = "theme.{$theme}.{$template}";
    }

    $blade = new Blade(__DIR__ . '/views', __DIR__ . '/storage/cache/theme');

    if (!$echo) {
        return $blade->make($template, $data)->render();
    }

    $res = $blade->make($template, $data)->render();
    $res = minify_html($res);
    echo $res;
}

function homepage($page = '1')
{
    $file = "data/homepages/home-$page.html.gz";
    $link = "https://hdqwalls.com/latest-wallpapers/page/$page";

    if (!file_exists($file)) {
        $html = scrape($link, $file);
    }

    $html = gzdecode(file_get_contents($file));

    $doc = hQuery::fromHTML($html);

    $images = $doc->find('.wallpapers_container .wall-resp');
    $gambar = array();
    foreach ($images as $image) {
        $gambar[] = array(
            'title' => $image->find('a')->text,
            'src' => str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $image->find('img')->src),
            'href' => $image->find('a')->href,
        );

    }
    $data['images'] = $gambar;

    $lists = $doc->find('.panel-default')[3];
    $lists = $lists->find('a.cat_list');
    $cats = array();
    foreach ($lists as $list) {
        $cats[] = array(
            'title' => preg_replace('#<span(.*?)>(.*?)</span>#is', '', $list->html),
            'link' => $list->href,
            'number' => $list->find('#badge')->text,
        );
    }
    $data['categories'] = $cats;

    $pagination = count($doc->find('ul.pagination li')) - 3;
    $endpage = $doc->find('ul.pagination li')[$pagination]->text;

    if (empty($endpage)) {
        Flight::redirect('/');
    }

    return $data;
}

function single($slug)
{
    $file = "data/wallpapers/$slug.html.gz";
    $link = "https://hdqwalls.com/$slug";

    $data['link'] = str_replace('-wallpaper', '', $slug);

    if (!file_exists($file)) {
        $html = scrape($link, $file);
    }

    $html = gzdecode(file_get_contents($file));

    $doc = hQuery::fromHTML($html);

    $data['title'] = $doc->find('h1')->text;
    $data['category'] = $doc->find('ol.breadcrumb li')[1]->text;
    $data['category_link'] = $doc->find('ol.breadcrumb li a')[1]->href;
    $data['img_thumb'] = str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $doc->find('.wallpaper img')->src);
    $data['img_ori'] = str_replace('/bthumb', '', $data['img_thumb']);
    $data['img_title'] = $doc->find('.btn-default-res')->text;

    $tagtag = $doc->find('ul.float_left a');
    $tags = array();
    foreach ($tagtag as $tag) {
        $tags[] = array(
            'title' => $tag->text,
            'link' => str_replace('/', '/tags/', $tag->href),
        );
    }

    $data['tags'] = $tags;

    $relatedrelated = $doc->find('#related_panel a');
    $relateds = array();
    foreach ($relatedrelated as $related) {
        $relateds[] = array(
            'title' => $related->alt,
            'link' => str_replace('/', '/wallpaper/', $related->href),
            'img' => str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $related->find('img')->src),
        );
    }

    $data['relateds'] = $relateds;

    $lists = $doc->find('.panel-default')[3];
    $lists = $lists->find('a.cat_list');
    $cats = array();
    foreach ($lists as $list) {
        $cats[] = array(
            'title' => preg_replace('#<span(.*?)>(.*?)</span>#is', '', $list->html),
            'link' => $list->href,
            'number' => $list->find('span')->text,
        );
    }
    $data['categories'] = $cats;

    return $data;
}

function category($slug, $page = 1)
{
    $file = "data/categories/$slug-$page.html.gz";
    $link = "https://hdqwalls.com/category/$slug/page/$page";

    if (!file_exists($file)) {
        $html = scrape($link, $file);
    }

    $html = gzdecode(file_get_contents($file));

    $doc = hQuery::fromHTML($html);

    $data['title'] = $doc->find('h1')->text;
    $data['description'] = $doc->find('meta[name=description]')->content;
    $data['keywords'] = $doc->find('meta[name=keywords]')->content;

    $data['category_link'] = $doc->find('ol.breadcrumb li a')[1]->href;
    $cat_page = strrchr($data['category_link'], '/');
    $data['category_link'] = str_replace($cat_page, '/', $data['category_link']);

    $images = $doc->find('.wallpapers_container .wall-resp');
    $gambar = array();
    foreach ($images as $image) {
        $gambar[] = array(
            'title' => $image->find('a')->text,
            'src' => str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $image->find('img')->src),
            'href' => $image->find('a')->href,
        );

    }
    $data['images'] = $gambar;

    $lists = $doc->find('.panel-default')[3];
    $lists = $lists->find('a.cat_list');
    $cats = array();
    foreach ($lists as $list) {
        $cats[] = array(
            'title' => preg_replace('#<span(.*?)>(.*?)</span>#is', '', $list->html),
            'link' => $list->href,
            'number' => $list->find('span')->text,
        );
    }
    $data['categories'] = $cats;

    $pagination = count($doc->find('ul.pagination li')) - 3;
    $endpage = $doc->find('ul.pagination li')[$pagination]->text;

    if (empty($endpage)) {
        Flight::redirect('/');
    }

    return $data;
}

function tag($slug, $page = 1)
{
    $file = "data/tags/$slug-$page.html.gz";
    $link = "https://hdqwalls.com/$slug/page/$page";

    if (!file_exists($file)) {
        $html = scrape($link, $file);
    }

    $html = gzdecode(file_get_contents($file));

    $doc = hQuery::fromHTML($html);

    $data['title'] = $doc->find('h1')->text;
    $data['description'] = $doc->find('meta[name=description]')->content;
    $data['keywords'] = $doc->find('meta[name=keywords]')->content;

    $data['category_linkx'] = $doc->find('ol.breadcrumb li a')[1]->href;
    $cat_page = strrchr($data['category_linkx'], '/');
    $data['category_link'] = str_replace($cat_page, '/', $data['category_linkx']);

    $images = $doc->find('.wallpapers_container .wall-resp');
    $gambar = array();
    foreach ($images as $image) {
        $gambar[] = array(
            'title' => $image->find('a')->text,
            'src' => str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $image->find('img')->src),
            'href' => $image->find('a')->href,
        );

    }
    $data['images'] = $gambar;

    $lists = $doc->find('.panel-default')[3];
    $lists = $lists->find('a.cat_list');
    $cats = array();
    foreach ($lists as $list) {
        $cats[] = array(
            'title' => preg_replace('#<span(.*?)>(.*?)</span>#is', '', $list->html),
            'link' => $list->href,
            'number' => $list->find('span')->text,
        );
    }
    $data['categories'] = $cats;

    $pagination = count($doc->find('ul.pagination li')) - 3;
    $endpage = $doc->find('ul.pagination li')[$pagination]->text;

    if (empty($endpage)) {
        Flight::redirect('/');
    }

    return $data;
}

function resolution($res, $slug)
{
    $file = "data/resolutions/$res-$slug.html.gz";
    $link = "https://hdqwalls.com/wallpaper/$res/$slug";

    $data['link'] = str_replace('-wallpaper', '', $slug);

    if (!file_exists($file)) {
        $html = scrape($link, $file);
    }

    $html = gzdecode(file_get_contents($file));

    $doc = hQuery::fromHTML($html);

    $data['title'] = $doc->find('h1')->text;
    $data['category'] = $doc->find('ol.breadcrumb li')[1]->text;
    $data['category_link'] = $doc->find('ol.breadcrumb li a')[1]->href;
    $data['img_thumb'] = str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $doc->find('.wallpaper img')->src);
    $data['imgdownload'] = str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $doc->find('a.btn-hot')->href);
    $data['imgdownload_title'] = $doc->find('.btn-hot')->text;
    $data['img_ori'] = str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $doc->find('a.btn-fresh')->href);
    $data['img_title'] = $doc->find('a.btn-fresh')->text;

    $tagtag = $doc->find('ul.float_left a');
    $tags = array();
    foreach ($tagtag as $tag) {
        $tags[] = array(
            'title' => $tag->text,
            'link' => str_replace('/', '/tags/', $tag->href),
        );
    }

    $data['tags'] = $tags;

    $relatedrelated = $doc->find('#related_panel a');
    $relateds = array();
    foreach ($relatedrelated as $related) {
        $relateds[] = array(
            'title' => $related->alt,
            'link' => $related->href,
            'img' => str_replace(['https://', 'images.hdqwalls.com'], ['https://cdn.statically.io/img/', 'images.hdqwalls.com/f=auto'], $related->find('img')->src),
        );
    }

    $data['relateds'] = $relateds;

    $lists = $doc->find('.panel-default')[3];
    $lists = $lists->find('a.cat_list');
    $cats = array();
    foreach ($lists as $list) {
        $cats[] = array(
            'title' => preg_replace('#<span(.*?)>(.*?)</span>#is', '', $list->html),
            'link' => $list->href,
            'number' => $list->find('span')->text,
        );
    }
    $data['categories'] = $cats;

    return $data;
}

function current_url()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $current = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $current;
}

function minify_html($Html)
{
    $Search = array(
        '/(\n|^)(\x20+|\t)/',
        '/(\n|^)\/\/(.*?)(\n|$)/',
        '/\n/',
        //'/\<\!--.*?-->/',
        '/(\x20+|\t)/', # Delete multispace (Without \n)
        '/\>\s+\</', # strip whitespaces between tags
        '/(\"|\')\s+\>/', # strip whitespaces between quotation ("') and end tags
        '/=\s+(\"|\')/',
    ); # strip whitespaces between = "'

    $Replace = array(
        "\n",
        "\n",
        " ",
        //"",
        " ",
        "><",
        "$1>",
        "=$1",
    );

    $Html = preg_replace($Search, $Replace, $Html);
    //$Html = str_replace('more_vyant','<!--more-->',$Html);

    return $Html;
}
