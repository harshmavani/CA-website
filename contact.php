<?php
    $error = "";
    $success = "";
    if(isset($_POST['submit']) && $_POST['submit'] != ""){
        if(isset($_POST['name']) && $_POST['name'] != "" && isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['phone']) && $_POST['phone'] != "" && isset($_POST['subject']) && $_POST['subject'] != "" && isset($_POST['message']) && $_POST['message'] != ""){

            $to = 'harshmavani76@gmail.com';
            $headers = array('From' => $_POST['email']);
            $subject = strtolower(ucwords($_POST['subject']));
            $message = "<p>Name : ".$_POST['name']."</p><br/><p>Email : ".$_POST['email']."</p><br/><p>Phone : ".$_POST['phone']."</p><br/><p>Message : ".$_POST['message']."</p><br/>";
            if(mail($to,$subject,$message,$headers)) {
                $success = "Your inquiry request send successfully.";
                header("Location: contact.php?status=1&message=".$success);
            } else {
                $error = "Someting went wrong. Message not sent";
                header("Location: contact.php?status=0&message=".$error);
            }
        }
        else{
            $error = "Sorry!, An error occurred!";
            header("Location: contact.php?status=0&message=".$error);
        }
    }
?>
<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dsn&co. - An Organizational Development &amp; Talent Solution Company</title>
    <!-- Stylesheets -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css" />
    <link rel="icon" href="images/Titlelogo.png" type="image/x-icon">
    <script type="text/javascript">
        function Popup() {
            alert('Email Send Successfully !!!');
            window.location.href = 'contact.php';
        }
    </script>
</head>
<!-- page wrapper -->
<body class="page-wrapper">
    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
    <!-- main header area -->
    <header class="main-header">
        <!-- Top Header -->
        <?php include 'top_header.php';?>
        <!-- Navigation -->
        <?php include 'nav.php';?>
    </header>
    <!-- end main header area -->
    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">Contact Us</div>
        </div>
    </div>
    <!-- end page title -->
    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text">
                <a href="index.php">Home</a><i class="fa fa-angle-right"></i> Contact Us
            </div>
        </div>
    </div>
    <!-- bread crumb end -->
    <!-- contact-info -->
    <section class="contact-info contact-page centered">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <div class="title">Lacation</div>
                        <div class="text">
                            <p>206,2nd Floor Madhavbaug Complex<br>,Opp.Jalaram Steel Furniture,<br>Kapodra,Varachha road,Surat-395006.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="title">Phone</div>
                        <div class="text" style="margin-top: 6%; margin-bottom: 6%">
                            <p>+91 99781 51907<br />
                                +91 95742 75485</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="title">Email</div>
                        <div class="text" style="margin-top: 9%; margin-bottom: 9%">
                            <p><a href="mailto:solutions@confabpro.com">snd_ca@yahoo.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- contact infe end -->

    <!-- contact-section -->
    <section class="contact-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="contact-form-area">
                        <div class="title">
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="text">
                            <p>DSN&Co. is an consultancy that provides connected thinking, insight and capability to industry leading organisations.</p>
                        </div>
                        <form method="POST" action="" class="default-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="name" type="text" id="txtname" placeholder="Name" / required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="email" type="email" id="txtmail" placeholder="Email" / required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="phone" type="text" id="txtphone" placeholder="Phone" / required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="subject" type="text" id="txtsub" placeholder="Subject" / required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" rows="2" cols="20" id="txtmsg" placeholder="Message">
                                    </textarea>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="submit" name="submit" value="Send Message" id="btnsubmit" class="btn-one style-one radi"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="google-map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1552.0813756182818!2d73.16124639915736!3d22.297208946424227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1bc2292121c81bf7!2sGangotri%20Society!5e0!3m2!1sen!2sin!4v1568643431397!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border: 0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="form">
                        <a href="#">counter
                            <button>submit</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <?php include 'top_header.php';?>
        </div>
    </section>

    <!-- contact section end -->
    <!-- Footer -->
    <?php include 'footer.php';?>   
    <!--End pagewrapper-->
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>
    <!--jquery js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bxslider.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>
    <script src="js/script.js"></script>

    <!-- End of .page_wrapper -->
</body>
</html>