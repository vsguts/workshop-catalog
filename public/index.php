<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

$router = require __DIR__ . '/../routes/routes.php';

$application = new \App\Application($router);

echo $application->handleRequest(new \App\Http\Request());

