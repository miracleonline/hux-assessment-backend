<?php

// Database configuration
return [
    'host' => 'localhost',
    'dbname' => 'contacts_app',
    'username' => 'your_username',
    'password' => 'your_password',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
];
