<?php

require 'vendor/autoload.php';
require 'functions.php';
require 'config.php';

Flight::route('/', function () {
    $page = 1;
    view('home', [
        'data' => homepage(1),
        'page' => $page,
    ]);
});

Flight::route('/page/@page:[0-9]+', function ($page) {
    view('home', [
        'data' => homepage($page),
        'page' => $page,
    ]);
});

Flight::route('/wallpaper/@slug/', function ($slug) {
    view('single', [
        'data' => single($slug),
    ]);
});

Flight::route('/category/@slug/', function ($slug) {
    $page = 1;
    view('category', [
        'data' => category($slug),
        'page' => $page,
    ]);
});

Flight::route('/category/@slug/page/@page:[0-9]+', function ($slug, $page) {
    view('category', [
        'data' => category($slug, $page),
        'page' => $page,
    ]);
});

Flight::route('/tags/@slug/', function ($slug) {
    $page = 1;
    view('tags', [
        'data' => tag($slug),
        'page' => $page,
    ]);
});

Flight::route('/tags/@slug/page/@page:[0-9]+', function ($slug, $page) {
    view('tags', [
        'data' => tag($slug, $page),
        'page' => $page,
    ]);
});

Flight::route('/download/wallpaper/@res:[0-9]+x[0-9]+/@slug/', function ($res, $slug) {
    view('resolution', [
        'data' => resolution($res, $slug),
    ]);
});

Flight::map('notFound', function () {
    return Flight::redirect('/');
});

Flight::start();
