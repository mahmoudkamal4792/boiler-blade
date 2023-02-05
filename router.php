<?php 

$pages = [
    'home',
    'land',
];

$page = $_SERVER['REQUEST_URI'];

$page = strtok($page, '?');

$page = trim($page, '/');

if ($page == '') {
    $page = 'home';
}

if (!in_array($page, $pages)) {
    $page = '404';
}