@php

$site_name = site_url();

$desc = 'Get Daily New Resep from ' . $site_name;

$base_url = home_url();
$current_url = current_url();
$domain_url = site_url();

$category = 'resep';

$domain = str_replace(['https://', 'http://', '/'], '', $base_url);

$years = date('Y');

$editor = 'admin@' . $domain_url;
$webmaster = 'webmaster@' . $domain_url;

$max_rss = MAX_RSS;

$harini = date('r', strtotime('-1 days'));
$kemarin = date('r', strtotime('-2 days'));

@endphp

{!! '<' . '?' . "xml version='1.0' encoding='UTF-8'?>" !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>{{ $site_name }} - RSS Feed</title>
        <description>{{ $desc }}</description>
        <link>{{ $base_url }}</link>
        <atom:link href="{{ $current_url }}" rel="self" type="application/rss+xml" />
        <category domain="{{ $domain }}">{{ $category }}</category>
        <copyright>Copyright {{ $years }} {{ $site_name }}, Inc.</copyright>
        <docs>{{ $current_url }}</docs>
        <language>en-us</language>
        <lastBuildDate>{{ $kemarin }}</lastBuildDate>
        <managingEditor>{{ $editor }} (editor)</managingEditor>
        <pubDate>{{ $harini }}</pubDate>
        <webMaster>{{ $webmaster }} (webmaster)</webMaster>
        <generator>Resep Masakan Indonesia</generator>
        @foreach (collect($list)->shuffle()->take($max_rss)
    as $keyword)
            @php
                $title = ucwords($keyword);
                
                $post_url = post_url($keyword);
                
                $desc = image_url($keyword)['description'];
                
                $link = "<a href='" . $post_url . "'>view details</a>";
                $desc .= 'You can look new details of ' . $title . ' by click this link : ' . $link;
                
                $desc = $desc;
                
                $post_date = date('r', strtotime('-1 days'));
            @endphp

            <item>
                <title>{{ $title }}</title>
                <description>{{ $desc }}</description>
                <link>{{ $post_url }}</link>
                <pubDate>{{ $post_date }}</pubDate>
                <guid>{{ $post_url }}</guid>
            </item>
        @endforeach

    </channel>
</rss>
