<?php

use Twitter\Http\Response;

require_once __DIR__ . '/vendor/autoload.php';

$name = $_GET['name'];

$response = new Response();
$response->setHeaders([
    'Content-Type' => 'text/html'
]);
$response->setStatusCode(200);
$response->setContent("Hello $name");

$response->send();
