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

// ======================== LOGIN
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