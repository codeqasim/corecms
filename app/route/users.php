<?php

use AppRouter\Router;
use Mailgun\Mailgun;

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
    header('Location: '.root.'login/logout');
});

// ======================== USER LOGIN
$router->get('login(.*)', function() {

    if (isset($_SESSION['user_login']) == true) { header('Location: '.root.'dashboard'); };
    views('Login',
    '',
    'user/login');
});

// ======================== USER SIGNUP
$router->get('signup(.*)', function() {

    if (isset($_SESSION['user_login']) == true) { header('Location: '.root.'dashboard'); };
    views('Signup',
    '',
    'user/signup');
});

// ======================== USER SIGNUP
$router->get('dashboard', function() {

    views('Dashboard',
    '',
    'user/dashboard');
});

// ======================== USER LOGIN
$router->post('login', function() {

    require_once "app/vendor/db.php";

    // mobile and Password sent from form
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);
    $password = md5($pass);

        $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'";
         $res=mysqli_num_rows(mysqli_query($mysqli, $sql));

            if($res == 1) {

                // include "core/mail.php";
                // $mg->messages()->send($SENDER_DOMAIN, [
                // 'from'    => 'ecomistan <postmaster@ecomistan.com>',
                // 'to'      => ' <'.$_POST['email'].'>',
                // 'subject' => 'Login Alert',
                // 'template'    => 'login_alert',
                // 'h:X-Mailgun-Variables'    => '{"link": "'.$_SERVER['REMOTE_ADDR'].'"}'
                // ]);

                $user = $mysqli->query('SELECT * FROM accounts WHERE email = "'.$email.'"')->fetch_object();

                // USER VERIFICATION SESSION
                if ($user->email_verification == 1 ) {
                    $_SESSION['email_verification'] = 1;
                }

                $_SESSION['user_login'] = true;
                $_SESSION['user_id'] = $user->id;
                $_SESSION['mobile'] = $user->mobile;
                $_SESSION['email'] = $user->email;

                header('Location: '.root.'dashboard');
             } else {
                header('Location: '.root.'login/invalid');
            }
});

// ======================== USER SIGNUP
$router->post('signup', function() {

    // print_r($_REQUEST);
    // die;

    require_once "app/vendor/db.php";

        // VALIDATION
        if(isset($_POST['first_name']) && trim($_POST['first_name']) !== "") {} else { echo "first_name - param or value missing "; die; }
        if(isset($_POST['last_name']) && trim($_POST['last_name']) !== "") {} else { echo "last_name - param or value missing "; die; }
        if(isset($_POST['mobile']) && trim($_POST['mobile']) !== "") {} else { echo "mobile - param or value missing "; die; }
        if(isset($_POST['email']) && trim($_POST['email']) !== "") {} else { echo "email - param or value missing "; die; }
        if(isset($_POST['password']) && trim($_POST['password']) !== "") {} else { echo "password - param or value missing "; die; }
        // if(isset($_POST['nic']) && trim($_POST['nic']) !== "") {} else { echo "nic_no - param or value missing "; die; }
        // if(isset($_POST['city']) && trim($_POST['city']) !== "") {} else { echo "city - param or value missing "; die; }

        $m = str_replace(' ', '', $_POST['mobile']);
        $mo = preg_replace('/[^A-Za-z0-9\-]/', '', $m); // REMOVE SPECIAL CHARTS.

        // REMOVE ZERO FROM MOBILE NUMBER
        if ($mo[0] == 0 ) { $mobile = "92". ltrim($mo, "0"); } else {
            $mobile = "92". $mo; }

        $mail_code = rand(100000, 999999);
        $mobile_code = rand(100000, 999999);

        $query = $mysqli->query("INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `nic_no`, `user_city_id`, `user_img`, `mobile_verification`, `mobile_code`, `email_verification`, `email_code`, `docs_verification`, `social_verification`, `user_address`, `user_job_type`, `user_status`)
        VALUES (NULL, '".$_POST['first_name']."', '".$_POST['last_name']."', '".$mobile."', '".$_POST['email']."', '".md5($_POST['password'])."', '', '', '', '0', '".$mobile_code."', '0', '".$mail_code."', '0', '0', NULL, NULL, '0');");

        $user = $mysqli->query('SELECT * FROM accounts WHERE id = "'.$mysqli->insert_id.'"')->fetch_object();

        if ($mysqli->affected_rows == 1 ) {

            $_SESSION['user_login'] = true;
            $_SESSION['user_id'] = $user->id;
            $_SESSION['mobile'] = $user->mobile;
            $_SESSION['email'] = $user->email;

            // print_r($_SESSION);
            // die;

            // $active_url = root."accounts/verification/email/'.$mail_code.'/'.$user->id.'";

            // mail("compoxition@gmail.com","My subject","Your activation link :". $active_url );

            // include "app/vendor/mail.php";
            // $mg->messages()->send($SENDER_DOMAIN, [
            //     'from'    => 'ecomistan <postmaster@ecomistan.com>',
            //     'to'      => ''.$_POST['first_name'].' <'.$_POST['email'].'>',
            //     'subject' => 'Hello '.$_POST['first_name'].'',
            //     'template'    => 'signup',
            //     'h:X-Mailgun-Variables'    => '{"link": "https://ecomistan.com/accounts/verification/email/'.$mail_code.'/'.$user->id.'"}'
            // ]);

            // echo "<pre>";
            // print_r($mysqli);
            // print_r($user->id);
            // echo "<pre>";
            // die;

            die(header("Location: ".root."account/email_verification"));

            } else {

            header("Location: ".root."signup/failed");

        }
});