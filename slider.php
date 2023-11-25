<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Draggable Image Slider | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="script.js" defer></script>
    <style>
        /* Import Google font - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');


        .wrapper {
            display: flex;
            margin: 20px 0px;
            max-width: 100%;
            position: relative;
        }

        .wrapper i {
            top: 50%;
            height: 44px;
            width: 44px;
            color: #fff;
            cursor: pointer;
            font-size: 1.15rem;
            position: absolute;
            text-align: center;
            line-height: 44px;
            background: red;
            border-radius: 50%;
            transform: translateY(-50%);
            transition: transform 0.1s linear;
        }

        .wrapper i:active {
            transform: translateY(-50%) scale(0.9);
        }

        .wrapper i:hover {
            background: #f2f2f2;
            color: #000;
        }

        .wrapper i:first-child {
            left: 50px;
            z-index: 999;
            display: none;
        }

        .wrapper i:last-child {
            right: 50px;
        }

        .wrapper .carousel {
            font-size: 0px;
            cursor: pointer;
            overflow: hidden;
            white-space: nowrap;
            scroll-behavior: smooth;
        }

        .carousel.dragging {
            cursor: grab;
            scroll-behavior: auto;
        }

        .carousel.dragging img {
            pointer-events: none;
        }

        .carousel img {
            height: 500px;
            object-fit: cover;
            user-select: none;
            margin-left: 14px;
            width: calc(100% / 4);
        }

        .carousel img:first-child {
            margin-left: 20px;
        }

        @media screen and (max-width: 900px) {
            .carousel img {
                width: calc(100% / 22);
            }
        }

        @media screen and (max-width: 550px) {
            .carousel img {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
            <img src="./img/dwall-images/affinity/Roomset_AF24521.jpg" alt="img" draggable="false">
            <img src="./img/dfloor/2003-10-002.jpg" alt="img" draggable="false">
            <img src="./img/dwall-images/affinity/Roomset_AF24530.jpg" alt="img" draggable="false">
            <img src="./img/dfloor/1002-21-002.jpg" alt="img" draggable="false">
            <img src="./img/dwall-images/affinity/Roomset_AF24521.jpg" alt="img" draggable="false">
            <img src="./img/dfloor/2002-02-02.jpg" alt="img" draggable="false">
            <img src="./img/dwall-images/affinity/Roomset_AF24560.jpg" alt="img" draggable="false">
            <img src="./img/dfloor/81996-002.jpg" alt="img" draggable="false">
            <img src="./img/dwall-images/notabene/8A.jpg" alt="img" draggable="false">
            <img src="./img/dfloor/81996-9-002.jpg" alt="img" draggable="false">
            <img src="./img/dwall-images/notabene/8B.jpg" alt="img" draggable="false">
            <img src="./img/dfloor/2007-02-002.jpg" alt="img" draggable="false">
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

</body>
<script>
    const carousel = document.querySelector(".carousel"),
        firstImg = carousel.querySelectorAll("img")[0],
        arrowIcons = document.querySelectorAll(".wrapper i");

    let isDragStart = false,
        isDragging = false,
        prevPageX, prevScrollLeft, positionDiff;

    const showHideIcons = () => {
        // showing and hiding prev/next icon according to carousel scroll left value
        let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
        arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
        arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
    }

    arrowIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
            // if clicked icon is left, reduce width value from the carousel scroll left else add to it
            carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
            setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
        });
    });

    const autoSlide = () => {
        // if there is no image left to scroll then return from here
        if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

        positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
        let firstImgWidth = firstImg.clientWidth + 14;
        // getting difference value that needs to add or reduce from carousel left to take middle img center
        let valDifference = firstImgWidth - positionDiff;

        if (carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
            return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
        }
        // if user is scrolling to the left
        carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }

    const dragStart = (e) => {
        // updatating global variables value on mouse down event
        isDragStart = true;
        prevPageX = e.pageX || e.touches[0].pageX;
        prevScrollLeft = carousel.scrollLeft;
    }

    const dragging = (e) => {
        // scrolling images/carousel to left according to mouse pointer
        if (!isDragStart) return;
        e.preventDefault();
        isDragging = true;
        carousel.classList.add("dragging");
        positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
        carousel.scrollLeft = prevScrollLeft - positionDiff;
        showHideIcons();
    }

    const dragStop = () => {
        isDragStart = false;
        carousel.classList.remove("dragging");

        if (!isDragging) return;
        isDragging = false;
        autoSlide();
    }

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("touchstart", dragStart);

    document.addEventListener("mousemove", dragging);
    carousel.addEventListener("touchmove", dragging);

    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("touchend", dragStop);
</script>

</html>