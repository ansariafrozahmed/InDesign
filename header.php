<style>
    @media screen and (min-width: 1200px) and (max-width: 999999px) {
        header.reveal_header.animated.headroom--top.headroom--not-bottom {
            display: none;
        }

        header.reveal_header.animated.headroom--not-bottom.headroom--not-top.slideUp {
            display: none;
        }

        header.reveal_header.animated.headroom--not-bottom.headroom--not-top.slideDown {
            display: none;
        }

        header.reveal_header.animated.headroom--not-top.slideUp.headroom--bottom {
            display: none;
        }

        header.reveal_header.animated.headroom--not-top.headroom--not-bottom {
            display: none;
        }

        header.reveal_header.animated.headroom--not-bottom.slideDown.headroom--top {
            display: none;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 1199px) {
        nav.sticky.top-0.z-20.sfdg {
            display: none;
        }

        nav.sticky.top-0.z-20.dfgsar {
            display: none;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 768px) {
        h2.xasd {
            font-size: 50px !important;
        }
    }

    /*new header*/
    ul.level-1xdjash {
        display: flex;
        list-style: none;
        padding-left: 30px;
    }

    ul.level-1xdjash li a {
        padding: 20px;
        font-weight: 400;
        color: black;
        font-size: 18px;
    }

    ul.level-2vsdvbdsb {
        display: none;
        position: absolute;
        background: white;
        color: black;
        z-index: 9;
        padding: 20px;
        list-style: none;
        /*top: 150px;*/
    }

    li.parentfwwd:hover ul.level-2vsdvbdsb {
        display: block;
    }

    ul.level-2vsdvbdsb li a {
        color: black;
    }






    /* search bar */


    .topnav .search-container {
        float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: #ccc;
    }

    @media screen and (max-width: 600px) {
        .topnav .search-container {
            float: none;
        }

        .topnav a,
        .topnav input[type=text],
        .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }

        .topnav input[type=text] {
            border: 1px solid #ccc;
        }
    }






    /* language css */
    div.odjoad {
        display: none;
        position: absolute;
        background: black;
        z-index: 9999;
        right: 22px;
        padding: 10px;
        color: white;
        cursor: pointer;
    }

    ul.sub-menu {
        display: flex;
        list-style: none;
        padding: 0px 10px;
        font-size: 18px;
    }

    ul.sub-menu li {
        padding: 0px 6px;
        margin-right: 5px;
        color: white;
    }

    .cwegf:hover div.odjoad {
        display: block;
        cursor: pointer;
    }

    ul.sub-menu li a:hover,
    ul.sub-menu li a.active {
        color: white;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="sticky top-0 z-20 sfdg" id="navbages" style="position: sticky;z-index: 999;">
    <div class="bg-white">
        <div class="flex" style="display:block;padding:0px 20px">
            <a style="display: flex;align-items: center;" href="index" title="Go to home" id="small-navbar-logo" class="inline-block mr-20 md:hidden lg:inline-block hard-out">
                <img style="display:block;margin:auto" src="img/logo.png" width="350" alt="">
            </a>
        </div>
    </div>
</nav>

<nav class="sticky top-0 z-20 dfgsar" id="navbar" style="position: sticky;z-index: 999;">
    <div class="bg-white">
        <div class="flex" style="display:flex;padding:20px;justify-content: space-between;align-items: center;">
            <a href="index" title="Go to home" id="small-navbar-logo" class="inline-block mr-20 md:hidden lg:inline-block hard-out">
                <img id="logo-img" style="visibility: hidden;" src="img/logo.png" width="200" height="" alt="">
            </a>
            <nav style="display: flex;align-items: center;">
                <ul class="level-1xdjash" style="margin-bottom: 0;">
                    <li><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li class="parentfwwd"><a href="#0">Products <i class="fa fa-angle-down"></i></a>
                        <ul class="level-2vsdvbdsb">
                            <!--<li class="back"><a href="#0">Back</a></li>-->
                            <li style="margin-bottom: 10px;"><a href="dwall"><img width="40px" height="40px" src="img/dwall.png" alt=""> D'WALL</a></li>
                            <li><a href="dfloor"><img width="40px" height="40px" src="img/DFLOOR.png" alt=""> D'FLOOR</a></li>
                        </ul>
                    </li>
                    <li><a href="gallerynew">Gallery</a></li>
                    <li><a href="catalogue">E-Catalogue</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
            <div style="display: flex;align-items: center;" class="panelhds_footerfwaf">
                <div class="phoneh_elemfewfent" style="display:flex;align-items: center;">
                    <div class="search-container">


                        <!-- <input id="searchInput" style="outline: none; border: none; border-bottom: 1px solid;" type="text" placeholder="Search.." name="search">
                        <button style="margin-left: -7px; border: none; background: none;" onclick="searchPage()"><i class="fa fa-search"></i></button> -->

                    </div>
                    <!-- <i style="padding: 7px 11px;" class="fa fa-user-o"></i> -->
                    <a style="margin-top: 2px;" href="tel:+919920076078"><i style="padding: 3px 7px;color:black" class="bi bi-telephone"></i></a>
                    <!-- <div class="cwegf">
                        <i class="dloswd" style="padding: 0px 6px;cursor:pointer;margin-bottom: 0">EN</i>
                        <div class="odjoad">
                            <p>Choose your language</p>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">EN</a>
                                </li>
                                <li>
                                    <a href="#">NL</a>
                                </li>
                                <li>
                                    <a href="#">FR</a>
                                </li>
                                <li>
                                    <a href="#">DE</a>
                                </li>
                                <li>
                                    <a href="#">ES</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</nav>
<header class="reveal_header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="index" class="logo_normal"><img src="img/logo.png" width="170" height="45" alt=""></a>
                <a href="index" class="logo_sticky"><img src="img/logo_sticky.png" width="135" height="45" alt=""></a>
            </div>
            <div class="col-6">
                <nav>
                    <ul>
                        <!-- <li><a href="#booking_section" class="btn_1 btn_scrollto">Book Now</a></li> -->
                        <li>
                            <div class="hamburger_2 open_close_nav_panel">
                                <div class="hamburger__box">
                                    <div class="hamburger__inner"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- /container -->
</header><!-- /Header -->

<div class="nav_panel">
    <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
    <div class="logo_panel"><img src="img/logo_sticky.png" width="135" height="45" alt=""></div>
    <div class="sidebar-navigation">
        <nav>
            <ul class="level-1">
                <li><a href="index">Home</a></li>
                <li><a href="about">About</a></li>
                <li class="parent"><a href="#0">Products</a>
                    <ul class="level-2">
                        <li class="back"><a href="#0">Back</a></li>
                        <li><a href="dwall">D'WALL</a></li>
                        <li><a href="dfloor">D'FLOOR</a></li>
                    </ul>
                </li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="catalogue">E-Catalogue</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
        <div class="panel_footer">
            <div class="phone_element">
                <a href="tel://+919920076078">
                    <i class="bi bi-telephone"></i>
                    <span><em>Info and bookings</em>+91 9920076078</span>
                </a>
            </div>
        </div>
        <!-- /panel_footer -->
        <!-- /panel_footer -->
    </div>
    <!-- /sidebar-navigation -->
</div>
<!-- /nav_panel -->
<script>
    // JavaScript
    function searchPage() {
        const searchText = document.getElementById("searchInput").value.trim();
        const pageText = document.body.innerText;
        const re = new RegExp(searchText.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'), "gi");

        // Reset previous highlighting
        removeHighlighting();

        let matches = pageText.match(re);
        if (matches) {
            highlightMatches(matches, searchText);
        } else {
            // Handle no matches found
            alert("No matches found.");
        }
    }

    function highlightMatches(matches, searchText) {
        const highlightedText = `<span style="background-color: yellow;" class="highlighted">${searchText}</span>`;

        matches.forEach(match => {
            const re = new RegExp(match.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'), "gi");
            document.body.innerHTML = document.body.innerHTML.replace(re, (matchedText) => {
                return `<span style="background-color: yellow;" class="highlighted">${matchedText}</span>`;
            });
        });

        // Scroll to the first occurrence of the highlighted section
        const firstHighlightedElement = document.querySelector(".highlighted");
        if (firstHighlightedElement) {
            firstHighlightedElement.scrollIntoView({
                behavior: "smooth"
            });
        }
    }

    function removeHighlighting() {
        const highlightedElements = document.querySelectorAll(".highlighted");
        highlightedElements.forEach(element => {
            element.outerHTML = element.textContent;
        });
    }
</script>
<script>
    // Listen for scroll events
    window.addEventListener("scroll", function() {
        // Get the current scroll position
        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        // Get the logo image element
        var logoImage = document.getElementById("logo-img");

        // Check if the scroll position is more than 50
        if (scrollPosition > 50) {
            // If scroll position is more than 50, change the visibility to "unset"
            logoImage.style.visibility = "unset";
        } else {
            // If scroll position is 50 or less, revert the visibility to "hidden"
            logoImage.style.visibility = "hidden";
        }
    });
</script>