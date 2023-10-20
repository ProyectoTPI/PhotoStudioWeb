# My PHP App

[![DeepSource](https://app.deepsource.com/gh/ProyectoTPI/PhotoStudioWeb.svg/?label=active+issues&show_trend=true&token=eiWlU9c8ilvyz-jN8VaX6C4I)](https://app.deepsource.com/gh/ProyectoTPI/PhotoStudioWeb/?ref=repository-badge)

This is a PHP vanilla application with HTML views. It includes a basic file structure and routing setup.

## File Structure

- `public/index.php`: Entry point of the application. Includes necessary files and sets up routing.
- `public/css/style.css`: CSS styles for the application.
- `public/js/script.js`: JavaScript code for the application.
- `src/controllers/HomeController.php`: Class `HomeController` with method `index` to handle root route.
- `src/models/User.php`: Class `User` to represent a user in the application.
- `src/views/home.php`: HTML view for the home page of the application.
- `src/views/layout.php`: HTML layout for the application.
- `vendor/`: Directory containing dependencies installed via Composer.
- `.htaccess`: Configuration file for the Apache web server.
- `composer.json`: Configuration file for Composer.
- `composer.lock`: Contains exact versions of dependencies installed via Composer.
- `README.md`: Documentation for the project.

## Usage

The application has a single route, the root route `/`. It displays the home page, which includes a welcome message and a list of users.
