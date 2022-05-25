<?php

// CORECMS v1.0

use AppRouter\Router;
use Mailgun\Mailgun;

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

$router->get('mail', function() {

    $to = 'compoxition@gmail.com';
    $subject = 'Marriage Proposal';
    $message = 'Hi Jane, will you marry me?';
    $from = 'info@odereo.com';

    // Sending email
    if(mail($to, $subject, $message)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }

    });
    

// DISPATCH ROUTER
$router->dispatchGlobal();