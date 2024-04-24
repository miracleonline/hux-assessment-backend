<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

// Create Slim app
$app = AppFactory::create();

// Define routes
require __DIR__ . '/../src/routes/authRoutes.php';
require __DIR__ . '/../src/routes/contactRoutes.php';

// Run the Slim app
$app->run();
