<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{
    public function index()
    {
        // Get a user from the database
        $user = new User();
        $user->setId(1);
        $user->setName('John Doe');
        $user->setEmail('john.doe@example.com');

        // Render the home view with the user data
        require_once __DIR__ . '/../views/home.php';
    }
}