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
</head>

<body>

    <!-- MAIN -->
    <main>

        <!-- LOADING -->
        <div id="page-loader">
            <!-- SPINNER CONTAINER -->
            <div class="spinner-container">
                <div class="css-spinner"></div>
            </div>
            <!-- /SPINNER CONTAINER -->
        </div>
        <!-- /LOADING -->

        <!-- HERO -->
        <section id="hero" class="hero hero-1">


            <!-- FRONT CONTENT -->
            <div class="front-content page-enter-animated">

                <div class="row">
                    <div class="col-sm-6">

                            <!-- CYCLE SLIDER WRAPPER  -->
                            <div class="cycle-wrapper">

                                <!-- CYCLE SLIDER -->
                                <div id="cycle">

                                    <div class="slide">
                                        <h2>People who live the experience are your best resource for ideas to improve services</h2>
                                    </div>
                                    <div class="slide">
                                        <h2>I think there is a really good team within Coastal Health. Once you, as a patient, as a family, are put in contact with these services, then your journey is almost quite nice.</h2>
                                    </div>

                                </div>
                                <!-- /CYCLE SLIDER -->

                            </div>
                            <!-- /CYCLE SLIDER WRAPPER -->

                    </div>
                    <div class="col-sm-6">
                        <div class="login-container">
                            <div class="login">
                                <div class="logo"><img src="/wp-content/themes/vch/images/HorizontalLogo.svg" alt=""></div>
                            <h2>Sign In</h2>
                            <?php
                            if (!is_user_logged_in()) { // Display WordPress login form:
                                $args = array(
                                    'redirect' => __('dashboard'),
                                    'form_id' => 'loginform',
                                    'label_username' => __('Username'),
                                    'label_password' => __('Password'),
                                    'label_remember' => __('Remember Me'),
                                    'label_log_in' => __('Log In'),
                                    'remember' => true,
                                );
                                wp_login_form($args);
                            } else { // If logged in:
                                wp_loginout(home_url()); // Display "Log Out" link.
                            ?>
                                <a class="button" href="/dashboard">Enter</a>
                            <?php
                            // wp_register('', ''); // Display "Site Admin" link.
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /FRONT CONTENT -->


            <!-- BACKGROUND CONTENT -->
            <div class="background-content page-enter-animated">


                <!-- LEVEL 1 -->
                <div class="level-1">


                    <div class="bg-overlay"></div>
                    <div class="bg-pattern"></div>
                    <div id="canvas"><canvas class="bg-effect layer" data-depth="0.2"></canvas></div>


                </div>
                <!-- /LEVEL 1 -->


                <!-- LEVEL 2 -->
                <div class="level-2">

                    <div class="bg-image layer" data-depth="0.04"></div>
                    <div class="bg-video layer" data-depth="0.04"></div>
                    <div class="bg-color layer" data-depth="0.04"></div>

                </div>
                <!-- /LEVEL 2 -->


            </div>
            <!-- /BACKGROUND CONTENT -->


        </section>
        <!-- /HERO -->

    </main>

    <script type="text/javascript" src="/wp-content/themes/vch/js/theme/plugins/plugins.js"></script>
    <script type="text/javascript" src="/wp-content/themes/vch/js/theme/config.js"></script>
    <script type="text/javascript" src="/wp-content/themes/vch/js/theme/scripts.js"></script>
    <script type="text/javascript" src="/wp-content/themes/vch/js/theme/hero.js"></script>
    <script type="text/javascript" src="/wp-content/themes/vch/js/landing.js"></script>
</body>

</html>