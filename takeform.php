<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Lucas Torres Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/lticon.png">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
        <!--font-family: 'Knewave', cursive;-->


        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed black no-background">
                <div class="container">  

                    <div class="attr-nav">
                        <ul>
                            <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                    </div>  


                    <!-- Start Header Navigation -->
                    <div class="navbar-header">

                        <a class="navbar-brand" href="#brand">
                            LUCAS TORRES
                        </a>

                    </div>
                    <!-- End Header Navigation -->
                </div>   


                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <div class="widget">
                        <h6 class="title">Lucas Torres Portfolio</h6>
                        <ul class="link main-nav">
                            <li><a href="#home">work experience</a></li>
                            <li><a href="#about">skills</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#choose">education</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h6 class="title">Additional Links</h6>
                        <ul class="link">
                            <li><a href="http://klamar.ipd10.com/" target="_blank">Kendrik Lamar</a></li>
                            <li><a href="http://mrcorte.ipd10.com/" target="_blank">Mr. Corte Barbershop</a></li>
                            <li><a href="http://bored.ipd10.com/" target="_blank">Bored mini games</a></li>
                            <li><a href="http://forum.ipd10.com/" target="_blank">Marketing forum website</a></li>
                            <li><a href="http://mrcorte.ipd10.com/" target="_blank">Mr. Corte Barbershop</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Side Menu -->
            </nav>


            <!--Home Sections-->
            <section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-sm-6">
                                <div class="home-shadow text-right">
                                    <img src="assets/images/shadow-img.png" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="main" class="home_text text-left is-loading">

                                    <h4>Hi, I'm Lucas and I'm a creative</h4>
                                    <h1 class="is-loading title">#DEVELOPER</h1>
                                    <div class="about_socail m-top-10">
                                        <ul class="list-inline text-center">
                                            <li><a href="https://www.facebook.com/lucas.torres.16547" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/lucas-torres-044513153/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>              

                                <a class="mouse-scroll" href="#about"> 
                                    <span class="mouse">
                                        <span class="mouse-movement"></span>
                                    </span>
                                    <span class="mouse-message fadeIn">scroll</span> 
                                </a>
                            </div>
                        </div>




                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--About Section--> 
            <section id="about" class="about bg-light roomy-60">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="about_content">

                                    <div class="about_content_text">
                                        <?php
                                        // Change this to YOUR address
                                        $recipient = 'torresjuanlucas@gmail.com';
                                        $email = $_POST['email'];
                                        $realName = $_POST['realname'];
                                        $subject = $_POST['subject'];
                                        $body = $_POST['body'];
                                        # We'll make a list of error messages in an array
                                        $messages = array();
                                        # Allow only reasonable email addresses
                                        if (!preg_match("/^[\w\+\-.~]+\@[\-\w\.\!]+$/", $email)) {
                                            $messages[] = "That is not a valid email address.";
                                        }
                                        # Allow only reasonable real names
                                        if (!preg_match("/^[\w\ \+\-\'\"]+$/", $realName)) {
                                            $messages[] = "The real name field must contain only " .
                                                    "alphabetical characters, numbers, spaces, and " .
                                                    "reasonable punctuation. We apologize for any inconvenience.";
                                        }
                                        # CAREFUL: don't allow hackers to sneak line breaks and additional
                                        # headers into the message and trick us into spamming for them!
                                        $subject = preg_replace('/\s+/', ' ', $subject);
                                        # Make sure the subject isn't blank afterwards!
                                        if (preg_match('/^\s*$/', $subject)) {
                                            $messages[] = "Please specify a subject for your message.";
                                        }

                                        $body = $_POST['body'];
                                        # Make sure the message has a body
                                        if (preg_match('/^\s*$/', $body)) {
                                            $messages[] = "Your message was blank. Did you mean to say " .
                                                    "something?";
                                        }
                                        if (count($messages)) {
                                            # There were problems, so tell the user and
                                            # don't send the message yet
                                            foreach ($messages as $message) {
                                                echo("<h5>Error found: " .
                                                        "$message</h5>\n");
                                            }
                                            echo("<h5>Correct the problems in the form below, " .
                                            "then click Send Your Message again.</h5>");
                                        } else {
                                            # Send the email - we're done
                                            mail($recipient, $subject, $body, "From: $realName <$email>\r\n" .
                                                    "Reply-To: $realName <$email>\r\n");
                                            echo("<h3>Your message has been sent. Thank you!</h3>" . 
                                                   "<h3>I will reply as soon as possible.</h3>\n");
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div><!-- End off col-md-6 -->
                        </div><!-- End off row -->
                    </div><!-- End off container -->
            </section><!-- End off About us Section -->


            <!--Contact Section-->
            <section id="contact" class="contact bg-white roomy-150">
                <div class="container">
                    <div class="row">
                        <div class="main_contact">
                            <div class="head_title">
                                <h5><span class="divider"></span> Get enquiries now</h5>
                            </div>
                            <div class="col-md-5">
                                <form class="m-top-50" form action="takeform.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="your name" name="realname">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="your e-mail" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="your dubject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="you message" name="body"></textarea>
                                    </div>
                                    <div class="form_btn text-right m-top-50 popup" onclick="myFunction()">
                                        <button type="submit" class="btn btn-primary" name="send" value="Send Your Message">Send<span class="popuptext" id="myPopup">Message in progress</span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                                <div class="contact_content">
                                    <div class="head_right">
                                        <h2>contact me</h2>
                                    </div>

                                    <div class="contact_content_text">
                                        <h5>Let's keep in touch!</h5>
                                        <h5>I'd love to hear from you - let's see what we can do together.</h5>
                                        <h5>6999 Briand</h5>
                                        <h5>Montreal.</h5>
                                        <h5 class="phone">514-442-2257</h5>
                                        <h5 class="info">torresjuanlucas@gmail.com</h5>
                                        <div class="author_text text-right">
                                            <h5>Regards!</h5>
                                            <h1>Lucas Torres</h1>
                                            <h6>Full-stack developer</h6>
                                        </div>
                                        <div class="copyright text-right m-top-80">
                                            <h5 class="wow fadeInRight">Made with <i class="fa fa-heart"></i> by <a href="https://bootstrapthemes.co">Lucas Torres</a>2017. All Rights Reserved</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/bootsnav.js"></script>


        <script src="assets/js/landing.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
                                        // When the user clicks on div, open the popup
                                        function myFunction() {
                                            var popup = document.getElementById("myPopup");
                                            popup.classList.toggle("show");
                                        }
        </script>
    </body>
</html>

