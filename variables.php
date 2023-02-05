<?php 
$posts = file_get_contents(__DIR__ . '/posts.json');
$variables = [
    'posts' => json_decode($posts, true)['posts'],
];