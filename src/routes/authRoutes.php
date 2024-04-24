<?php

use Slim\Routing\RouteCollectorProxy;

// Import necessary classes and functions
use App\Controllers\AuthController;

// Define routes
$app->group('/auth', function (RouteCollectorProxy $group) {
    $group->post('/register', AuthController::class . ':register');
    $group->post('/login', AuthController::class . ':login');
});
