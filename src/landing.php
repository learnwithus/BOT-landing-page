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
                        <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53 53.03">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <g id="head">
                                        <g transform="translate(18.13,43) translate(-18.13,-10)">
                                            <path id="head-2" fill="#e95554" d="M14.34,33L14.34,53L0.07,53L0.07,33ZM2.93,35.88L2.93,50.15L11.48,50.15L11.48,35.88Z" class="cls-1" transform="translate(-0.07,-33)"/>
                                            <path id="lefteye" fill="#e95554" d="M6.69,45.35L6.69,47.48L7.69,47.48L7.69,45.35" class="cls-1" transform="translate(-0.07,-33)"/>
                                            <path id="righteye" fill="#e95554" d="M6.69,37.9L6.69,40.03L7.69,40.03L7.69,37.9" class="cls-1" transform="translate(-0.07,-33)"/>
                                            <path id="antenna" d="M0,0L0,-4" stroke="#e95554" fill="none" stroke-linecap="square" stroke-width="2.8" transform="translate(-36.5975,5.965) rotate(-90)"/>
                                        </g>
                                    </g>
                                    <path id="T" class="cls-1" d="M38.07,33L38.07,35.85L43.78,35.85L43.78,53L46.63,53L46.63,35.88L52.34,35.88L52.34,33Z" fill="#e95554" opacity="1" transform="translate(46.3102,43) translate(-45.205,-43)" />
                                    <path class="cls-1" d="M27.18,33.18C23.2082,33.18,19.6275,35.5726,18.1075,39.242C16.5876,42.9115,17.4277,47.1353,20.2362,49.9438C23.0447,52.7523,27.2685,53.5924,30.938,52.0725C34.6074,50.5525,37,46.9718,37,43C37,41.7104,36.746,40.4335,36.2525,39.242C35.759,38.0506,35.0357,36.9681,34.1238,36.0562C33.2119,35.1443,32.1294,34.421,30.938,33.9275C29.7465,33.434,28.4696,33.18,27.18,33.18ZM31.87,47.7C29.628,49.937,26.1182,50.2793,23.4864,48.5175C20.8545,46.7557,19.8332,43.3804,21.0469,40.4551C22.2606,37.5297,25.3714,35.8688,28.4775,36.4876C31.5835,37.1065,33.8202,39.8329,33.82,43C33.8211,43.4357,33.779,43.8704,33.6944,44.2977C33.6098,44.7251,33.4831,45.1431,33.3162,45.5455C33.1492,45.9479,32.9428,46.3328,32.7,46.6945C32.4572,47.0562,32.1792,47.3931,31.87,47.7Z" fill="#e95554"/>
                                </g>
                            </g>
                        </svg>
                        </div>
                        <div class="login-container">
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
</body>

</html>