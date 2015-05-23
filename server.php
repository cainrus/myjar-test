<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

$publicDir = __DIR__.'/public';
$uri = urldecode(
	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri === '/') {
	$uri = '/index.html';
}


// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if (file_exists($publicDir.$uri))
{
	return false;
}

chdir(__DIR__);
require_once __DIR__.'/index.php';
