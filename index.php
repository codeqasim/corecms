<?php

// CORECMS v1.0

use AppRouter\Router;
use Mailgun\Mailgun;

define('appname', 'ODEREO');

// SESSION STARTED
session_start();

error_reporting(E_ERROR | E_PARSE);

// INCLUDE VENDORS
include "vendor/autoload.php";
include "app/vendor/router.php";
include "app/route/users.php";
include "app/route/settings.php";
include "app/route/products.php";
include "app/route/store.php";
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

 mail("compoxition@gmail.com","My subject","hey man how are you doing!");


    // $curl = curl_init();

    // $params = array(
    //     'from' => 'postmaster@{{mydomain}}',
    //     'to' => 'compoxition@gmail.com',
    //     'subject' => 'hey man');

    // curl_setopt_array($curl, array(
    //   CURLOPT_URL => 'https://api.mailgun.net/phptravels.com/messages',
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_ENCODING => '',
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 0,
    //   CURLOPT_FOLLOWLOCATION => true,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => 'POST',
    //   CURLOPT_POSTFIELDS => $params,
    //   CURLOPT_HTTPHEADER => array(
    //     'Authorization: Basic {{token}}'
    //   ),
    // ));

    // $response = curl_exec($curl);

    // curl_close($curl);
    // echo $response;

    // ////////////////////////////////////////////////////////////////////////////////////////////////////

    // $to = 'compoxition@gmail.com';
    // $subject = 'Marriage Proposal';
    // $message = 'Hi Jane, will you marry me?';
    // $from = 'info@odereo.com';

    // // Sending email
    // if(mail($to, $subject, $message)){
    //     echo 'Your mail has been sent successfully.';
    // } else{
    //     echo 'Unable to send email. Please try again.';
    // }

});

\Sentry\init(['dsn' => 'https://ae5f9f40bb094588ae8f0e4631161067@o1024531.ingest.sentry.io/6441484' ]);
// throw new Exception("My first Sentry error!");

// DISPATCH ROUTER
$router->dispatchGlobal();