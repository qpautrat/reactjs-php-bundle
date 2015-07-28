<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

require_once __DIR__.'/autoload.php';
require_once __DIR__.'/AppKernel.php';
require_once __DIR__.'/HomeController.php';

Debug::enable();

$kernel = new AppKernel('dev', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
