<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>INDESIGN || CONTACT US</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/dwall.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/img/dwall.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/dwall.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/dwall.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/dwall.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <?php include 'header.php' ?>

    <main>

        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="./img/contact-slider.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <!-- <small class="slide-animated one">Luxury Hotel Experience</small> -->
                    <h1 class="slide-animated two">
                        <red style="color:#ec1e38">Con</red>tact Us
                    </h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div>C-1, Steel House, 1st Floor,<br>Paper Box Lane, Off<br> Mahakali Caves Road,<br>Andheri (East), Mumbai - 400093</div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                                <p><a href="#0">indesign023@gmail.com</a></p>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                                <div>
                                    <a href="tel:+91 9920076078">+91 9920076078</a><br>
                                    <a href="tel:+91 9820076878">+91 9820076878</a><br>
                                    <a href="tel:+91 9920576880">+91 9920576880</a><br>
                                    <small>Monday to Saturday 9am - 7pm</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                    <div id="message-contact"></div>
                    <form method="post" action="phpmailer/contact_template_email.php" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name" required>
                                    <label for="name_contact">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Subject" required>
                                    <label for="phone_contact">Phone</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email" required>
                                    <label for="email_contact">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact" placeholder="Telephone">
                                    <label for="phone_contact">Design No</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="email_contact" name="email_contact" placeholder="Email" required>
                                    <label for="email_contact">City</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact" placeholder="Telephone">
                                    <label for="phone_contact">Catalog Name</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-floating mb-4">
                            <select style="padding-top:0.625rem" class="form-select" id="phone_contact" name="phone_contact" required>
                                <option value="" disabled selected>Consumer</option>
                                <option value="home">Architect</option>
                                <option value="work">Interior Designer</option>
                                <option value="mobile">Dealer</option>
                                <option value="other">Distributor</option>
                            </select>
                            <label for="phone_contact"></label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                            <label for="message_contact">Message</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="verify_contact" name="verify_contact" required placeholder="Are you human? 3 + 1 =">
                                    <label for="verify_contact">Are you human? 3 + 1 =</label>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline" id="submit-contact"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!--/container -->
        <!-- map_contact -->
        <div class="">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.4364241114604!2d-73.96780638459853!3d40.774418641731515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29d3847f5%3A0x564dfbba0141774a!2s5th%20Ave%2C%20New%20York%2C%20NY%2C%20Stati%20Uniti!5e0!3m2!1sit!2ses!4v1661414716655!5m2!1sit!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7539.413525694117!2d72.861399!3d19.120516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c82fa4394655%3A0x5b1d2ed6fdb88846!2sSteel%20House%2C%20Gundavali%2C%20Andheri%20East%2C%20Mumbai%2C%20Maharashtra%20400053!5e0!3m2!1sen!2sin!4v1687763992614!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--/map_contact -->


    </main>

    <?php include 'footer.php' ?>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->

    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/common_functions.js"></script>
    <script src="js/datepicker_inline.js"></script>
    <script src="phpmailer/validate.js"></script>

</body>

</html>