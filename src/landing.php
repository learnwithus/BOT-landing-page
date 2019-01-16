<?php

/* Template Name: Landing */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VCH BOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/vch/css/landing.min.css">
    <script type="text/javascript" src="/wp-includes/js/jquery/jquery.js"></script>
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <div class="row">
            <div class="col-sm-6"></div>
                <div class="col-sm-6">
                <?php
                    if (!is_user_logged_in()) { // Display WordPress login form:
                        $args = array(
                            'redirect' => admin_url(),
                            'form_id' => 'loginform-custom',
                            'label_username' => __('Username custom text'),
                            'label_password' => __('Password custom text'),
                            'label_remember' => __('Remember Me custom text'),
                            'label_log_in' => __('Log In custom text'),
                            'remember' => true,
                        );
                        wp_login_form($args);
                    } else { // If logged in:
                        wp_loginout(home_url()); // Display "Log Out" link.
                        // echo " | ";
                        // wp_register('', ''); // Display "Site Admin" link.
                    }
                ?>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>