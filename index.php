<?php 

$url = trim( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/' );

$routes = [
  '' => 'views/home.php',
  'about' => 'views/about.php',
  'contact' => 'views/contact.php',
];


if (array_key_exists($url, $routes)) {
  require $routes[$url];
} else {
  require 'views/notfound.php';
}