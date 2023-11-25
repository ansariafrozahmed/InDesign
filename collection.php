<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>INDESIGN || DWALL</title>

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
    <link href="css/oneline.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <style>
        @media screen and (min-width: 0px) and (max-width: 500px) {
            .imd-sja {
                width: 100%;
            }
        }
        .col-xxl-4.col-xl-4.col-lg-6.col-md-6 {
            padding: 0 30px;
        }
    </style>
</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <?php include 'header.php' ?>

    <main>

        <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="./img/dwall-images/nomad/Amb%204310-5.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <!-- <small class="slide-animated one">Luxury Hotel Experience</small> -->
                    <h1 class="slide-animated two"><red style="color:#ec1e38">Coll</red>ections</h1>
                    <!--<img src="./img/dwall.png" style="width: 200px;background: #ffffffb0;border-radius: 20px;">-->
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->
        <!-- <div class="backgrng"> -->
      


        <?php include 'dfloor-backup.html' ?>

     


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