<?php
     $data = array(
    array(
        'heading' => "AFFINITY",
        'imageUrl' => "img/catalogue/AFFINITY.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/AAFINITY%201.pdf"
    ),
    array(
        'heading' => "NOTABENE",
        'imageUrl' => "img/catalogue/NOTABENE.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/NOTABENE_230124_164707_page-0001.pdf"
    ),
    array(
        'heading' => "SKYFALL",
        'imageUrl' => "img/catalogue/SKYFALL.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/SKYFALL.pdf"
    ),
     array(
        'heading' => "X'TREME",
        'imageUrl' => "img/catalogue/X'TREME.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/X'TREME.pdf"
    ),
    array(
        'heading' => "CRAFT",
        'imageUrl' => "img/catalogue/CRAFT.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/CRAFT%20(%20PREMIUM%20SILK%20COLLECTION).pdf"
    ),
    array(
        'heading' => "NOMAD",
        'imageUrl' => "img/catalogue/NOMAD.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/Nomad.pdf"
    ),
    array(
        'heading' => "PASSENGER",
        'imageUrl' => "img/catalogue/PASSENGER.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/PASSENGER_WEB-BOOK%20(1).pdf"
    ),
    array(
        'heading' => "LEGACY",
        'imageUrl' => "img/catalogue/LEGACY.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/LEGACY.pdf"
    ),
     array(
        'heading' => "SIGNATURE 2",
        'imageUrl' => "img/catalogue/SIGNATURE 2.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/signature%202.pdf"
    ),
    array(
        'heading' => "PULSAR",
        'imageUrl' => "img/catalogue/PULSAR.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/PULSAR(1).pdf"
    ),
    array(
        'heading' => "ESSENTIAL",
        'imageUrl' => "img/catalogue/ESSENTIAL.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/ECODECO_ESSENTIALS_WEB.pdf"
    ),
    array(
        'heading' => "TUSCANY",
        'imageUrl' => "img/catalogue/TUSCANY.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/TUSCANY.pdf"
    ),
     array(
        'heading' => "CARMEN",
        'imageUrl' => "img/catalogue/CARMEN.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/CARMEN.pdf"
    ),
    array(
        'heading' => "STAR DIAMOND",
        'imageUrl' => "img/catalogue/STAR DIAMOND.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/STAR%20DIAMOND%20pdf.pdf"
    ),
    array(
        'heading' => "CARTIER",
        'imageUrl' => "img/catalogue/CARTIER.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/cartier.pdf"
    ),
    array(
        'heading' => "FERUS",
        'imageUrl' => "img/catalogue/FERUS.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/ferus.pdf"
    ),
     array(
        'heading' => "IKON",
        'imageUrl' => "img/catalogue/IKON.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/ikon.pdf"
    ),
    array(
        'heading' => "VERMONT",
        'imageUrl' => "img/catalogue/VERMONT.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/vermont.pdf"
    ),
    array(
        'heading' => "TEXTURE VOL 1",
        'imageUrl' => "img/catalogue/TEXTURE VOL 1.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/texture_vol_1.pdf"
    ),
    array(
        'heading' => "TEXTURE VOL 2",
        'imageUrl' => "img/catalogue/TEXTURE VOL 2.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/texture_vol_2.pdf"
    ),
    array(
        'heading' => "DRESDEN",
        'imageUrl' => "img/catalogue/DRESDEN.png",
        'pdfUrl' => "http://indesignworld.in/images/pdf/dresdon.pdf"
    ),
   
    // Add more objects as needed
);

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" cbtnmtents="width=device-width, initial-scale=1">
    <style>
        /** {*/
        /*    box-sizing: border-box;*/
        /*}*/

        /*body {*/
        /*    background-color: #f1f1f1;*/
        /*    padding: 20px;*/
        /*    font-family: Arial;*/
        /*}*/

        /* Center website */
        .mainsad {
            max-width: 100%;
            margin: auto;
        }


        .onslam {
            margin: 10px -16px;
        }

        /* Add padding BETWEEN each colms */
        .onslam,
        .onslam>.colms {
            padding: 8px;
        }

        /* Create three equal colmss that floats next to each other */
        .colms {
            /*float: left;*/
            width: 25%;
            display: none;
            /* Hide all elements by default */
        }

        /* Clear floats after onslams */
        .onslam:after {
            cbtnmtents: "";
            display: table;
            clear: both;
        }

        /* cbtnmtents */
        .cbtnmtents {
            background-color: white;
            padding: 10px;
        }

        /* The "show" class is added to the filtered elements */
        .show {
            display: block;
        }

        /* Style the buttons */
        .cbtnms {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: black;
            color:white;
            cursor: pointer;
            margin-bottom: 5px;
            border-radius: 35px;
            margin-right: 10px;
             font-weight: 600;
        }

        .cbtnms:hover {
            background-color: #e81d23;
            color: white;
            font-weight: 600;
        }

        .cbtnms.active {
            background-color: #666;
            color: white;
        }

        @media screen and (min-width: 0px) and (max-width: 500px) {
            .colms {
                /*float: left;*/
                width: 50%;
                /*display: none;*/
                /* Hide all elements by default */
            }

            /*footer {*/
            /*    margin-top: 950px;*/
            /*}*/
        }

        @media screen and (min-width: 0px) and (max-width: 992px) {
            /*footer {*/
            /*    margin-top: 900px;*/
            /*}*/

            .onslam {
                margin: 0px;
            }

        }

        /*footer {*/
        /*    margin-top: 900px;*/
        /*}*/

        /*@media screen and (min-width: 1500px) and (max-width: 99999px) {*/
        /*    footer {*/
        /*        margin-top: 1300px;*/
        /*    }*/
        /*}*/
        .colms.metallic.show{
            margin-bottom:20px;
        }
        
    </style>
</head>

<body>

    <!-- mainsad (Center website) -->
    <div class="mainsad" style="padding-top:50px;padding-bottom:50px">



        <div id="mycbtnmsContainer" style="text-align: center;padding-bottom:30px">
            <!--<button class="cbtnms active" onclick="filterSelection('all')">All</button>-->
            <button class="cbtnms" onclick="filterSelection('floral')">AFFINITY</button>
            <button class="cbtnms" onclick="filterSelection('geometric')">NOMAD</button>
            <button class="cbtnms" onclick="filterSelection('classical')">CARMEN</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="main-metallic-part metallic">
            <div class="onslam" style="width:100%;margin:auto">
               
                <!--<div class="main-floral-part floral">-->
                <!--    <div class="onslam">-->
               
                <div class="row" style="display:flex;width:100%;margin:auto">
                       <!-- Single-Team Start -->
                    <?php
                        foreach($data as $key => $catalog) {
                            ?>
                                <div class="col-lg-4 col-md-6 mb-5 floral">
                        <div class="owl-item ">
                            <div class="blog-item">
                                <div class="blog-post-inner">
                                    <div class="post-thumbnail">
                                        <a data-fslightbox="gallery_1" data-type="image" href="<?= $catalog['imageUrl'] ?>">
                                            <img style="width: 100%;background: white;margin-bottom: 30px;" src="<?= $catalog['imageUrl'] ?>" alt="india-flag">
                                        </a>
                                    </div>
                                    <div class="blog-brief">
                                        <h3 style="text-align: center;text-transform: uppercase;font-weight: 500;margin-bottom: 10px;"><?= $catalog['heading'] ?></h3>
                                        <!--<a style="display: block; text-align: center;font-size: 20px;" target="_blank" href="images/pdf/AAFINITY 1.pdf">Download PDF</a>-->
                                        <!-- Button trigger modal -->
                                        <button style="display:block;margin:auto;background:red" type="button" class="btn_1 outline white mt-3" data-toggle="modal" data-target="#exampleModal<?= $key ?>">
                                            Download PDF
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?= $catalog['heading'] ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="myForm<?= $key ?>" method="post" onsubmit="handleFormSubmit(event, 'myForm<?= $key ?>')">
                                                            <div class="form-group">
                                                                <label for="name">Name:</label>
                                                                <input type="hidden" value="<?= $catalog['heading']  ?>" class="form-control" id="cname" name="cname" placeholder="Enter your name" required>
                                                                <input type="hidden" value="<?= $catalog['pdfUrl']  ?>" class="form-control" id="pdfurl" name="pdfurl" placeholder="Enter your name" required>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Phone:</label>
                                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn_1 mt-1 outline" data-dismiss="modal">Close</button>
                                                                <button style="background:red;margin-top: 7px !important;" type="submit" class="btn_1 outline white mt-3">Download PDF</button>
                                                            </div>
                                                        </form>
                                                        <div id="downloadContainer"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        } 
                    
                    ?>
                </div>



                <div class="row" style="display:flex;width:100%;margin:auto">
                       <!-- Single-Team Start -->
                    <?php
                        foreach($data as $key => $catalog) {
                            ?>
                                <div class="col-lg-4 col-md-6 mb-5 geometric">
                        <div class="owl-item ">
                            <div class="blog-item">
                                <div class="blog-post-inner">
                                    <div class="post-thumbnail">
                                        <a data-fslightbox="gallery_1" data-type="image" href="<?= $catalog['imageUrl'] ?>">
                                            <img style="width: 100%;background: white;margin-bottom: 30px;" src="<?= $catalog['imageUrl'] ?>" alt="india-flag">
                                        </a>
                                    </div>
                                    <div class="blog-brief">
                                        <h3 style="text-align: center;text-transform: uppercase;font-weight: 500;margin-bottom: 10px;"><?= $catalog['heading'] ?></h3>
                                        <!--<a style="display: block; text-align: center;font-size: 20px;" target="_blank" href="images/pdf/AAFINITY 1.pdf">Download PDF</a>-->
                                        <!-- Button trigger modal -->
                                        <button style="display:block;margin:auto;background:red" type="button" class="btn_1 outline white mt-3" data-toggle="modal" data-target="#exampleModal<?= $key ?>">
                                            Download PDF
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?= $catalog['heading'] ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="myForm<?= $key ?>" method="post" onsubmit="handleFormSubmit(event, 'myForm<?= $key ?>')">
                                                            <div class="form-group">
                                                                <label for="name">Name:</label>
                                                                <input type="hidden" value="<?= $catalog['heading']  ?>" class="form-control" id="cname" name="cname" placeholder="Enter your name" required>
                                                                <input type="hidden" value="<?= $catalog['pdfUrl']  ?>" class="form-control" id="pdfurl" name="pdfurl" placeholder="Enter your name" required>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Phone:</label>
                                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn_1 mt-1 outline" data-dismiss="modal">Close</button>
                                                                <button style="background:red;margin-top: 7px !important;" type="submit" class="btn_1 outline white mt-3">Download PDF</button>
                                                            </div>
                                                        </form>
                                                        <div id="downloadContainer"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        } 
                    
                    ?>
                </div>



                <div class="row" style="display:flex;width:100%;margin:auto">
                       <!-- Single-Team Start -->
                    <?php
                        foreach($data as $key => $catalog) {
                            ?>
                                <div class="col-lg-4 col-md-6 mb-5 classical">
                        <div class="owl-item ">
                            <div class="blog-item">
                                <div class="blog-post-inner">
                                    <div class="post-thumbnail">
                                        <a data-fslightbox="gallery_1" data-type="image" href="<?= $catalog['imageUrl'] ?>">
                                            <img style="width: 100%;background: white;margin-bottom: 30px;" src="<?= $catalog['imageUrl'] ?>" alt="india-flag">
                                        </a>
                                    </div>
                                    <div class="blog-brief">
                                        <h3 style="text-align: center;text-transform: uppercase;font-weight: 500;margin-bottom: 10px;"><?= $catalog['heading'] ?></h3>
                                        <!--<a style="display: block; text-align: center;font-size: 20px;" target="_blank" href="images/pdf/AAFINITY 1.pdf">Download PDF</a>-->
                                        <!-- Button trigger modal -->
                                        <button style="display:block;margin:auto;background:red" type="button" class="btn_1 outline white mt-3" data-toggle="modal" data-target="#exampleModal<?= $key ?>">
                                            Download PDF
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?= $catalog['heading'] ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="myForm<?= $key ?>" method="post" onsubmit="handleFormSubmit(event, 'myForm<?= $key ?>')">
                                                            <div class="form-group">
                                                                <label for="name">Name:</label>
                                                                <input type="hidden" value="<?= $catalog['heading']  ?>" class="form-control" id="cname" name="cname" placeholder="Enter your name" required>
                                                                <input type="hidden" value="<?= $catalog['pdfUrl']  ?>" class="form-control" id="pdfurl" name="pdfurl" placeholder="Enter your name" required>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Phone:</label>
                                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn_1 mt-1 outline" data-dismiss="modal">Close</button>
                                                                <button style="background:red;margin-top: 7px !important;" type="submit" class="btn_1 outline white mt-3">Download PDF</button>
                                                            </div>
                                                        </form>
                                                        <div id="downloadContainer"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        } 
                    
                    ?>
                </div>
                <!-- END GRID -->
            </div>
        </div>

        <!-- END mainsad -->
    </div>

    <script>
        filterSelection("metallic");

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("colms");

            if (c === "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
            var activeButton = document.querySelector(".cbtnms.active");
            if (activeButton) {
                activeButton.classList.remove("active");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) === -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var cbtnmsContainer = document.getElementById("mycbtnmsContainer");
        var cbtnmss = cbtnmsContainer.getElementsByClassName("cbtnms");
        for (var i = 0; i < cbtnmss.length; i++) {

            cbtnmss[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

</body>

</html>