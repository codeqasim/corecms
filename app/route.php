<?php

use AppRouter\Router;

// ======================== 404 PAGE
$router = new Router(function ($method, $path, $statusCode, $exception) {
http_response_code($statusCode);
views(
    '404 Page not found',       // TITLE
    'Page not found error 404', // DESCRIPTION
    '404'                       // VIEW
    );
});

// ======================== INDEX
$router->get('/', function() {
    views(
    'Homepage', // TITLE
    '',         // DESCRIPTION
    'home'      // VIEW
    );
});

// ======================== USER LOGOUT
$router->get('logout', function() {
    session_destroy();
    header('Location: '.root.'login');
});

// ======================== USER LOGIN
$router->get('login', function() {
    views('Login',
    '',
    'user/login');
});

// ======================== USER SIGNUP
$router->get('signup', function() {
    views('Login',
    '',
    'user/signup');
});