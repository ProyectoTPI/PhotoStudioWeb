<?php

// Load the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Create a new instance of the router
$router = new \Bramus\Router\Router();

// Define the root route
$router->get('/', function () {
    // Load the home view
    require __DIR__ . '/../src/views/home.php';
});

// Run the router
$router->run();
