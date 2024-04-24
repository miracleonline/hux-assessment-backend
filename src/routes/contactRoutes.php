<?php

use Slim\Routing\RouteCollectorProxy;

// Import necessary classes and functions
use App\Controllers\ContactController;

// Define routes
$app->group('/contacts', function (RouteCollectorProxy $group) {
    $group->post('', ContactController::class . ':create');
    $group->get('', ContactController::class . ':getAll');
    $group->get('/{id}', ContactController::class . ':getOne');
    $group->put('/{id}', ContactController::class . ':update');
    $group->delete('/{id}', ContactController::class . ':delete');
});
