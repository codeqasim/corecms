<?php // DEV MODE
$whitelist = array( '127.0.0.1', '::1' ); if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){ $dev = 1; } else { $dev = 0; } ?>

<!DOCTYPE html>
<html>
  <head>
    <title> <?=appname?> | <?php if(isset($title)){ echo $title; } ?></title>
    <meta name="description" content="<?php if(isset($desc)){ echo $desc; } else { echo ""; } ?>">
    <meta name="keywords" content="<?=appname?> ">
    <meta name="theme-color" content="000e4f" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="shortcut icon" href="<?=root?>public/assets/img/favicon.png">
    <link rel="stylesheet" href="<?=root?>public/assets/css/app.min.css">

    <meta property="og:site_name" content="<?=appname?> | <?php if(isset($title)){ echo $title; } ?>"/>
    <meta property="og:url" content="https://www.<?=appname?>.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?=appname?> | <?php if(isset($title)){ echo $title; } ?>"/>
    <meta property="og:description" content="<?php if(isset($desc)){ echo $desc; } ?>"/>
    <meta property="og:image" content="<?=root?>assets/img/social.jpg"/>
    <meta property="og:image:secure_url" content="<?=root?>assets/img/social.jpg"/>

    <!-- HomePage Business Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "<?=appname?>",
            "image" : "https://<?=appname?>.com/assets/img/favicon.png",
            "@id": "",
            "url": "https://www.<?=appname?>.com/",
            "telephone": "",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "65 Commercial Area Cavalry Ground Lahore Pakistan",
            "addressLocality": "Punjab",
            "postalCode": "5400",
            "addressCountry": "PK"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.5014241,
            "longitude": 74.3633957
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
            },
            "sameAs": [
                "https://www.facebook.com/<?=appname?>"
                "https://www.twitter.com/<?=appname?>"
                "https://www.instagram.com/<?=appname?>"
            ]
        }
    </script>

  </head>
  <body onload="document.body.style.opacity='1'" id="body" style="#opacity:1" class="">

  <header>


    <a class="brand" href="<?=root?>">
      <img src="<?=root?>assets/img/icon.png" alt="">
      <p><strong><?=appname?></strong></p>
     </a>


<ul>
  <li>
    <a href="<?=root?>login">Login</a>
    <a href="<?=root?>signup">signup</a>
  </li>
</ul>
</header>

<script src="<?=root?>assets/js/toast.js"></script>
<?php if (isset($account_nav)) { include "accounts/nav.php"; } ?>
<?php include $view ?>

<footer>
<p>Footer</p>
</footer>

<script src="<?=root?>public/assets/js/app.js"></script>

<script>
console.log("%cHi there! 👋 We are <?=appname?>. we are disrupting the industry.", "font-size:14px");
console.log("%cAny doubts, get in touch at info@<?=appname?>.com", "font-size:12px");

// AVOID USING DELAY IF USE IS LOGGED IN
var root = "<?=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)?>";
</script>