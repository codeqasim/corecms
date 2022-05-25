<?php

// CORECMS v1.0

use AppRouter\Router;

define('appname', 'ODEREO');

// SESSION STARTED
session_start();

// INCLUDE VENDORS
include "app/vendor/router.php";
include "app/route/users.php";
include "app/route/settings.php";
include "app/route/products.php";
include "app/api.php";

// VIEWS FUNCTION
function views($title,$desc,$body){
$title = $title;
$desc = $desc;
$view  = $body.".php";
include "app/views/main.php";
};

// X-FRAME OPTIONS
header("X-Frame-Options: SAMEORIGIN");

// FUNCTION FOR DEBUG RESPONSES
function dd($d) { echo "<pre>"; print_r($d); echo "</pre>"; die(); }

// DISPATCH ROUTER
$router->dispatchGlobal();