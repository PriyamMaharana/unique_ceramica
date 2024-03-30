<?php
include("form/email.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact || Unique Ceramica </title>

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
                                <li class=" "><a href="index.html">Home</a></li>
                                <li class=" "><a href="about.html">About Us</a></li>
                                <li class=""><a href="collection.html">Collection</a></li>
                                <li class=" "><a href="catelogue.html">Catalogue</a></li>
                                <li class="dropdown"><a>Company</a>
                                                        <ul>
                                                            <li><a
                                                                    href="service.html">About Company</a></li>
                                                            <li><a
                                                                    href="">Certificate</a></li>
                                                        </ul>
                                                    </li>
                                <li class="current"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--End Main Header-->


        <!--Start Contact details Area-->
        <section class="contact-details-area mb-5 pb-5">
            <div class="sec-title text-center mb-5">
                <p>Contact Details</p>
                <div class="title">How Can We <span>Help You?</span></div>
            </div>
            <div class="parallax-background"
                style="background-image:url(images/parallax-background/contact-details-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-details-content">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="content-info-box"
                                        style="background-image:url(images/parallax-background/contact-info-box-bg.jpg);">
                                        <div class="inner-content">
                                            <div class="inner">
                                                <div class="single-info-box wow fadeInDown" data-wow-delay="100ms"
                                                    data-wow-duration="1200ms">
                                                    <div class="icon">
                                                        <span class="icon-global"></span>
                                                    </div>
                                                    <div class="text">
                                                        <h3>Visit Our Office</h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="single-info-box white-bg wow fadeInUp"
                                                    data-wow-delay="100ms" data-wow-duration="1200ms">
                                                    <div class="icon">
                                                        <span class="icon-phone"></span>
                                                    </div>
                                                    <div class="text">
                                                        <h3>Contact Us</h3>
                                                        <p>+91 7990322179 <br> info@uniqueceramica.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-6">
                                    <div class="contact-details-form-box">
                                        <div class="title-box">
                                            <h2>Request for<br> Approximate Estimation</h2>
                                        </div>
                                        <div class="contact-details-box">
                                            <form class="contact-details-form" action="" method="post">
                                                <?php if (isset($_SESSION['status'])) {
                                                    ?>
                                                    <script>
                                                        swal({
                                                            title: "<?php echo $_SESSION['status'] ?>",
                                                            text: "",
                                                            icon: "<?php echo $_SESSION['status_icon'] ?>",
                                                        });
                                                    </script>
                                                    <?php
                                                    unset($_SESSION['status']);
                                                }
                                                ?>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="single-box">
                                                            <input type="text" name="form_name" value=""
                                                                placeholder="Full Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="single-box">
                                                            <input type="text" name="form_mobile" value=""
                                                                placeholder="Mobile No." required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="single-box">
                                                            <input type="email" name="form_email" value=""
                                                                placeholder="Email ID" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="single-box">
                                                                    <input type="text" name="form_subj" value="" placeholder="Subject" required="">
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="single-box">
                                                            <textarea name="form_message"
                                                                placeholder="Place Your Query Here.."
                                                                required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="single-box">
                                                            <button class="btn-one" type="submit" name="send-msg"
                                                                id="send-msg">Send Message<span
                                                                    class="flaticon-next"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact details Area-->


    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>


    <!-- thm custom script -->
    <script src="js/custom.js"></script>
    <script src="js/sweetalert.js"></script>


</body>

</html>