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




$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mailgun.net/phptravels.com/messages',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('from' => 'postmaster@{{mydomain}}','to' => 'compoxition@gmail.com','subject' => 'Tracking test','text' => 'Hello World','html' => 'You have requested to create a new account. Please use the following link to do that (link will expire in 6 hours):<br><br><a href="https://doublelist.com/create_account/?id=79495170&cd=70ca57b1102eb417f3f22ebefd7bbb84">https://doublelist.com/create_account/?id=79495170&cd=70ca57b1102eb417f3f22ebefd7bbb84</a><br><br>DO NOT SHARE THIS EMAIL WITH ANYONE ELSE. Any attempt to get this email from you is a scam and will compromise your account.
--bf15cccb9c424a55bb590daa37c3fedd--','amp-html' => '<!--
  ## Introduction

  The [`amp-image-lightbox`](/content/amp-dev/documentation/components/reference/amp-image-lightbox-v0.1.md) component allows the user to expand an image to fill the viewport.
--><!-- -->
<!doctype html>
<html ⚡4email>
<head>
<meta charset="utf-8">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <!-- ## Setup -->
  <!-- Import the amp-image-lightbox component in the header -->
  <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
  <style amp4email-boilerplate>body{visibility:hidden}</style>
</head>
<body>
  <!-- ## Basic usage -->
  <!--
    The `amp-image-lightbox` is activated using the `on` action on an `amp-img` element referencing the lightbox element\'s ID.
  -->
  <div>
    <amp-img on="tap:lightbox1" role="button" tabindex="0" src="https://amp.dev/static/samples/img/Border_Collie.jpg" alt="Picture of a dog" title="Picture of a dog, view in lightbox" layout="responsive" width="300" height="246"></amp-img>
    <amp-image-lightbox id="lightbox1" layout="nodisplay"></amp-image-lightbox>
  </div>

  <!-- ## Multi image support -->
  <!--
    It is even possible to show different images in the same `amp-image-lightbox`. Here is another image using the same lightbox.
  -->
  <amp-img on="tap:lightbox1" role="button" tabindex="0" src="https://amp.dev/static/samples/img/Hovawart.jpg" alt="Picture of a dog" title="Picture of a dog, view in lightbox" layout="responsive" width="600" height="400"></amp-img>

  <!-- ## Caption: figcaption -->
  <!--
    The amp-image-lightbox also can optionally display a caption for the image at the bottom of the viewport. This can either be the contents of the `<figcaption>` element when the image is in the figure tag...
  -->
  <figure>
    <amp-img on="tap:lightbox1" role="button" tabindex="0" src="https://amp.dev/static/samples/img/Border_Collie.jpg" alt="Picture of a dog" title="Picture of a dog, view in lightbox" layout="responsive" width="300" height="246"></amp-img>
    <figcaption>Border Collie.</figcaption>
  </figure>

  <!-- ## Caption: aria-describedby -->
  <!--
    ... or the contents of the element whose ID is specified by the image\'s <code>aria-describedby</code> attribute.
  -->
  <div>
    <amp-img on="tap:lightbox1" role="button" tabindex="0" aria-describedby="imageDescription" alt="Picture of a dog" title="Picture of a dog, view in lightbox" src="https://amp.dev/static/samples/img/Border_Collie.jpg" width="300" height="246"></amp-img>
    <div id="imageDescription">
      This is a border collie.
    </div>
  </div>
</body></html>','o:tag' => 'tracking_test','o:tracking' => 'yes'),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic {{token}}'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;






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


// DISPATCH ROUTER
$router->dispatchGlobal();