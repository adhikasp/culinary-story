<?php

require_once 'model.php';
require_once 'controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/index.php' || $uri == '/index.php/home') {
	show_home();
}
elseif($uri == '/index.php/cerita') {
	show_stories();
}