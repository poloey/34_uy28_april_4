<?php 
require 'vendor/autoload.php';

$url = trim( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/' );

$routes = [
  '' => 'views/home.php',
  'about' => 'views/about.php',
  'contact' => 'views/contact.php',
  'post' => 'views/post.php',
  'category' => 'views/category.php',
  'author' => 'views/author.php',
];


if (array_key_exists($url, $routes)) {
  require $routes[$url];
} else {
  require 'views/notfound.php';
}