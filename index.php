<?php

// CORECMS v1.0
define('appname', 'ODEREO');

include "vendor/autoload.php";

use AppRouter\Router;
use Mailgun\Mailgun;

// SESSION STARTED
session_start();

// INCLUDE VENDORS
include "app/vendor/router.php";
include "app/route/users.php";
include "app/route/settings.php";
include "app/route/products.php";
include "app/route/store.php";
include "app/api.php";
include "app/vendor/mail.php";

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

    $mail = [
        'name'=>'qasim',
        'email'=>'compoxition@gmail.com',
        'subject'=>'subject',
        'content_title'=>'your password has been reset',
        'content'=>'please find your new password below',
        'link'=>'https://google.com',
        'code'=>'code'
    ];
    mailer($mail);

    //  mail("compoxition@gmail.com","My subject","hey man how are you doing!");

});

\Sentry\init(['dsn' => 'https://ae5f9f40bb094588ae8f0e4631161067@o1024531.ingest.sentry.io/6441484' ]);
// throw new Exception("My first Sentry error!");

// DISPATCH ROUTER
$router->dispatchGlobal();