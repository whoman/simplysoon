<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Title of Website -->
    <title>SimplySoon - Coming Soon Landing Page</title>

    <meta name="description" content="Coming Soon Landing Page"/>
    <meta name="keywords" content="SimplySoon, html theme, Coming Soon Landing Page, Coming Soon Landing Page template, html landing page, one page, responsive landing page"/>
    <meta name="author" content="ryanteheme">

    <!-- Favicon -->
    <link rel="icon" href="assets/image/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/image/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="assets/css/fontello.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Source+Sans+Pro&display=swap"
          rel="stylesheet">
</head>

<body>

<!-- .container -->
<div class="container h-100 content-holder">
    <!-- .row -->
    <div class="row align-items-center h-100">
        <!-- .content -->
        <div class="col-md-10 offset-md-1 content text-center">
            <!-- Front Section -->
            <div id="front">

                <!-- Logo and Brand Name -->
                <div class="m-auto pb-4">
                    <img src="assets/image/logo.svg" alt="Title Of Your Brand" width="100" height="100"/>
                    <h1 class="fw-300 fs-2">Brand Name</h1>
                </div>
                <!-- /End Logo and Brand Name -->

                <div class="pb-4">
                    <h2 class="fw-400 fs-2">Our Website Is Under Construction</h2>
                </div>

                <div class="pb-5">
                    <p class="fw-300">Time Left Until Launching:</p>

                    <!-- CountDown  -->
                    <div class="row countdown no-gutters">
                        <div class="col-md-3 col-6">
                            <div class="countdown-item">
                                <h3 id="clock" class="text-white days"></h3> Days
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="countdown-item">
                                <h3 id="clock" class="text-white hours"></h3> Hrs
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="countdown-item">
                                <h3 id="clock" class="text-white minutes"></h3> Min
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="countdown-item">
                                <h3 id="clock" class="text-white seconds"></h3> Sec
                            </div>
                        </div>
                    </div>
                    <!-- /End CountDown -->
                </div>

                <!-- Buttons -->
                <div class="pt-3">
                    <!-- Newsletter Button -->
                    <button id="showNewsletter" type="button" class="btn btn-orange mr-3" data-toggle="modal"
                            data-target="#notifyMe">Notify Me!
                    </button>
                    <!-- /End Newsletter Button -->

                    <!-- About Button -->
                    <button id="showAbout" type="button" class="btn btn-blue">More Info</button>
                    <!-- /End About Button -->
                </div>
                <!-- /End Buttons -->
            </div>
            <!-- /End Front Section -->

            <!-- About Section -->
            <div id="about" class="about" style="display: none;">
                <!-- Content of About -->
                <div class="about-right">
                    <button id="back" type="button" class="close">×</button>
                    <h2 class="fs-2">About</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                    <!-- .social-networks -->
                    <ul class="list-inline social-networks">
                        <li class="list-inline-item">
                            <a href="https://twitter.com/username">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                       <li class="list-inline-item">
                           <a href="https://facebook.com/username">
                               <i class="icon-facebook"></i>
                           </a>
                       </li>
                        <li class="list-inline-item">
                            <a href="https://linkedin.com/username">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/username">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /End .social-networks -->
                </div>
                <!-- /End Content of About -->

                <!-- Contact info -->
                <div class="about-left">
                    <!-- .about-left-inner -->
                    <div class="about-left-inner">
                        <!-- .about-left-logo -->
                        <div class="about-left-logo">
                            <img src="assets/image/logo.svg" alt="Your Brand Title" width="64" height="64">
                            <h2 class="text-white fs-2">Brand Name</h2>
                        </div>
                        <!-- /End .about-left-logo-->

                        <!-- .about-right-contact -->
                        <div class="about-right-contact">
                            <!-- .contact-list -->
                            <ul class="list-unstyled contact-list">
                                <li>
                                    Phone:
                                    <span class="d-block"><i class="icon-phone"></i> 123456789</span>
                                </li>
                                <li>
                                    Address:
                                    <span class="d-block"><i class="icon-location"></i>
                                        616 Cactus St.Crown Point, IN 46307
                                        </span>
                                </li>
                                <li>
                                    Email:
                                    <span class="d-block"><i class="icon-mail-alt"></i>
                                        youremail@domain.com
                                        </span>
                                </li>
                            </ul>
                            <!-- /End .contact-list -->
                        </div>
                        <!-- /End .about-right-contact -->
                    </div>
                    <!-- /End .about-left-inner -->
                </div>
                <!-- /End Contact info -->
            </div>
            <!-- /End About Section -->
        </div>
        <!-- /End .content -->
    </div>
    <!-- /End .row -->
</div>
<!-- /End .container -->


<!-- The Modal -->
<div class="modal fade" id="notifyMe">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
        <!-- .modal-content -->
        <div class="modal-content newsletter border-0 rounded-0">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <!-- .newsletter-modal-title -->
            <div class="newsletter-modal-title">
                <h4>Get Early Access</h4>
            </div>
            <!-- /End .newsletter-modal-title-->


            <!-- Modal body -->
            <div class="modal-body text-center">
                <div id="notify" style="display:none;">
                    <p>Be the first to get notified<br>
                        when te site is lunched.
                    </p>
                    <div class="newsletter">
                        <form id="subscribe" class="form-inline" action="inc/subscribe.php" method="post">
                            <div class="input-group col-12">
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Type Your Email...">
                                <div class="input-group-append">
                                    <input class="input-group-text btn-orange" id="submit" type="submit" title="Notify Me"
                                           value="Notify Me"/>
                                </div>
                            </div>
                        </form>
                        <p>We promise to never spam you.</p>
                        <div id="response"></div>
                    </div>
                </div>
            </div>
            <!-- /End Modal body -->

            <!-- Alert Messages -->
            <div id="messageBox" class="message-box"></div>
            <!-- /End Alert Messages -->
        </div>
        <!-- /End .modal-content -->
    </div>
    <!-- /End .modal-dialog -->
</div>

<!-- Scripts -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>


<!-- Custom Script -->
<script src="assets/js/custom.js"></script>


</body>
</html>