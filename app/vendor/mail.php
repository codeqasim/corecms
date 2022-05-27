<?php

use Mailgun\Mailgun;

    $SENDER_DOMAIN = "ecomistan.com";
    $MAILGUN_FROM_EMAIL = "info@ecomistan.com";

    // First, instantiate the SDK with your API credentials
    $mg = Mailgun::create("key-528ca6d92f9006dea5fdb43e68464ee8");