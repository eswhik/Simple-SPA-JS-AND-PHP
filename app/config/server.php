<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

$domain = $_SERVER['HTTP_HOST'];

$path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

define('url_server', "$protocol://$domain$path/");
