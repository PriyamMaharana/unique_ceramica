<!DOCTYPE html>
<html lang="en">

<!-- about 06:46:13 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Catelog || Unique Ceramica </title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon/home-1.png">
    <link rel="icon" type="image/png" href="images/icon/home-1.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/icon/home-1.png" sizes="16x16">

</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="#">
                        <img src="images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class=""><a href="index.html">Home</a></li>
                                <li class=""><a href="about.html">About Us</a></li>
                                <li class=""><a href="collection.html">Collection</a></li>
                                <li class=" current"><a href="catelog.php">Catelogs</a></li>
                                <li class="dropdown"><a>Company</a>
                                    <ul>
                                        <li><a href="service.html">About Company</a></li>
                                        <li><a href="">Certificate</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--End Main Header-->


        <!--Start Project Description area-->
        <section class="project-description-area">
            <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img src="images/pattern/project-description-pattern.jpg" alt="Pattern Bg">
            </div>

            <?php if (isset($_GET['glossy'])) { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="project-description-image-box" style="height:70%">
                                <img src="images/projects/project-single/project-description-1.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="project-description-content">
                                <div class="sec-title">
                                    <p>Description</p>
                                    <div class="title">Armani Brown</div>
                                </div>
                                <div class="inner-content">
                                    <p style="text-align:justify">SUPER GLOSS FINISHED AND A TOUCH OF GLORIFIED GLAMOUR IS
                                        WHAT MAKE THESE TILES AN EXCEPTION.
                                        THEIR SOPHISTICATED OUTLOOK AND TRENDY COLORS SHIMMER AND BRIGHTEN UP THE MOOD AND
                                        SPACE.</p>

                                    <ul>
                                        <li>GLAZZED SURFACE</li>
                                        <li>FLEXIBLE BODY</li>
                                        <li>ITALIAN TECHNOLOGY</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="project-info-content mt-5">
                                <div class="inner-content">
                                    <ul>
                                        <li>
                                            <div class="title">
                                                <h4>Size</h4>
                                                <span>1200X2400 MM / 120X240 CM</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <h4>Thickness</h4>
                                                <span>9mm</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <h4>Finish</h4>
                                                <span>MATT</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <h4>Coverage Area</h4>
                                                <span>2.88 SQM / 31.00 SQFT</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <h4>Weight (Approx)</h4>
                                                <span>62 KG</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if (isset($_GET['matt'])) { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="project-description-image-box" style="height:70%">
                                    <img src="images/projects/project-single/project-description-1.jpg" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="project-description-content">
                                    <div class="sec-title">
                                        <p>Description</p>
                                        <div class="title">Armani Brown</div>
                                    </div>
                                    <div class="inner-content">
                                        <p style="text-align:justify">SUPER GLOSS FINISHED AND A TOUCH OF GLORIFIED GLAMOUR IS
                                            WHAT MAKE THESE TILES AN EXCEPTION.
                                            THEIR SOPHISTICATED OUTLOOK AND TRENDY COLORS SHIMMER AND BRIGHTEN UP THE MOOD AND
                                            SPACE.</p>

                                        <ul>
                                            <li>GLAZZED SURFACE</li>
                                            <li>FLEXIBLE BODY</li>
                                            <li>ITALIAN TECHNOLOGY</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-info-content mt-5">
                                    <div class="inner-content">
                                        <ul>
                                            <li>
                                                <div class="title">
                                                    <h4>Size</h4>
                                                    <span>1200X2400 MM / 120X240 CM</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <h4>Thickness</h4>
                                                    <span>9mm</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <h4>Finish</h4>
                                                    <span>MATT</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <h4>Coverage Area</h4>
                                                    <span>2.88 SQM / 31.00 SQFT</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <h4>Weight (Approx)</h4>
                                                    <span>62 KG</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } else { ?>
                    Nothing to show
            <?php } ?>

        </section>
        <!--End Project Description area-->

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>

    <script src="js/map-helper.js"></script>

    <script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/timepicker/timePicker.js"></script>
    <script src="assets/html5lightbox/html5lightbox.js"></script>

    <!-- thm custom script -->
    <script src="js/custom.js"></script>



</body>


<!-- project-single 06:54:06 GMT -->

</html>