<?php
include 'inc/header.php';
?>


    <!-- ---------------------------------------------Hero -->
    <!--    <div class="hero">-->
    <!--        <div class="slider">-->
    <!---->
    <!--            <div class="slide bg-img-1">-->
    <!--                <div class="wrapper">-->
    <!--                    <div class="hero-box">-->
    <!--                        <h3>Your Professional</h3>-->
    <!--                        <h1 class="dual-heading">BUSSINESS <span>WEBSITE</span></h1>-->
    <!--                        <h2>is just few steps away!</h2>-->
    <!--                        <div class="cta">-->
    <!--                            <a class="call-to-action-primary" href=" #"><span>Get Started</span></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="slide">-->
    <!--                <div class="wrapper">-->
    <!--                    <div class="hero-box">-->
    <!--                        <h3>Let us design your</h3>-->
    <!--                        <h1 class="dual-heading">Bussiness <span>Logo</span></h1>-->
    <!--                        <h2>Choose the style you want!</h2>-->
    <!--                        <div class="cta">-->
    <!--                            <a class="call-to-action-primary" href=" #"><span>Get Started</span></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </div>-->


    <section class="sec-hero bg-img-1">-->
        <div class="wrapper">
            <div class="hero-box">
                <h3>Your Professional</h3>
                <h1 class="dual-heading">BUSINESS <span>DEVELOPMENT</span></h1>

                <h2>is just few steps away!</h2>
                <div class="cta">
                    <a class="call-to-action-primary" href=" #"><span>Get Started</span></a>
                </div>
            </div>

            <!------------------------------------------------------------------------------------------>
            <div class="chal-box">
                <p>
                    <label>
                        <input type="radio" name="orientation" value="horizontal" checked />
                        <i class="fal fa-arrows-h"></i>
                    </label>
                    <label>
                        <input type="radio" name="orientation" value="vertical" />
                        <i class="fal fa-arrows-v"></i>
                    </label>
                </p>
                <button class="previous-button"><i class="fal fa-chevron-left"></i></button>
                <button class="next-button"><i class="fal fa-chevron-right"></i></button>
                <div class="scene">
                    <div class="carousel">
                        <div class="carousel__cell"><h1 class="dual-heading">BUSINESS <span>WEBSITE</span></h1></div>
                        <div class="carousel__cell"><h1 class="dual-heading">BUSINESS <span>LOGO</span></h1></div>
                        <div class="carousel__cell"><h1 class="dual-heading">YOUR <span>MOBILE APP</span></h1></div>
                        <div class="carousel__cell"><h1 class="dual-heading">STATIONERY <span>DESIGN</span></h1></div>
                        <div class="carousel__cell"><h1 class="dual-heading">100% <span>SATISFACTION</span></h1></div>
                        <div class="carousel__cell"><h1 class="dual-heading">Long Term <span>Relation</span></h1></div>
                    </div>

                </div>

                <div class="carousel-options">
                    <p style="display: none">
                        <label>
                            Cells
                            <input class="cells-range" type="range" min="6" max="6" value="1" disabled />
                        </label>
                    </p>
                    <p>
<!--                        <button class="previous-button"><i class="fal fa-chevron-left"></i></button>-->
<!--                        <button class="next-button"><i class="fal fa-chevron-right"></i></button>-->
                    </p>

                </div>
            </div>

            <style>
                .chal-box { box-sizing: border-box; text-align: center;position: relative;}

                button.next-button, button.previous-button {
                    position: absolute;
                    height: 100%;
                    padding: 10px;
                    background: #ffffff7d;
                    border: none;
                    font-size: 33px;
                }
                button.previous-button{
                    left: 0;
                }
                button.next-button{
                    right: 0;
                }


                .carousel-options {
                    /*display: none;*/
                }
                .scene {
                    /*border: 1px solid #CCC;*/
                    margin: 40px 0;
                    position: relative;
                    width: 750px;
                    height: 140px;
                    margin: 80px auto;
                    perspective: 1000px;
                }

                .carousel {
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    transform: translateZ(-288px);
                    transform-style: preserve-3d;
                    transition: transform 1s;
                }

                .carousel__cell {
                    position: absolute;
                    width: 190px;
                    width: 700px;
                    height: 120px;
                    left: 10px;
                    top: 10px;
                    /*border: 2px solid black;*/
                    //line-height: 116px;
                    font-size: 80px;
                    font-weight: bold;
                    text-align: center;
                    transition: transform 1s, opacity 1s;
                    background: rgba(255, 255, 255, 0.88);
                    box-shadow: 0 0px 0px 0px #fff;
                    animation: shadd 3s ease-in-out infinite;
                }
                @keyframes shadd {

                    80% {
                        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.14);
                    }
                }

                /*.carousel__cell:nth-child(9n+1) { background: hsla(  0, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+2) { background: hsla( 40, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+3) { background: hsla( 80, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+4) { background: hsla(120, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+5) { background: hsla(160, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+6) { background: hsla(200, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+7) { background: hsla(240, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+8) { background: hsla(280, 100%, 50%, 0.8); }*/
                /*.carousel__cell:nth-child(9n+0) { background: hsla(320, 100%, 50%, 0.8); }*/

                .carousel__cell:nth-child(1) { transform: rotateY(  0deg) translateZ(288px); }
                .carousel__cell:nth-child(2) { transform: rotateY( 40deg) translateZ(288px); }
                .carousel__cell:nth-child(3) { transform: rotateY( 80deg) translateZ(288px); }
                .carousel__cell:nth-child(4) { transform: rotateY(120deg) translateZ(288px); }
                .carousel__cell:nth-child(5) { transform: rotateY(160deg) translateZ(288px); }
                .carousel__cell:nth-child(6) { transform: rotateY(200deg) translateZ(288px); }
                .carousel__cell:nth-child(7) { transform: rotateY(240deg) translateZ(288px); }
                .carousel__cell:nth-child(8) { transform: rotateY(280deg) translateZ(288px); }
                .carousel__cell:nth-child(9) { transform: rotateY(320deg) translateZ(288px); }

                .carousel-options {
                    text-align: center;
                    position: relative;
                    z-index: 2;
                    background: hsla(0, 0%, 100%, 0.9);-->
                }
            </style>
            <script>
                var carousel = document.querySelector('.carousel');
                var cells = carousel.querySelectorAll('.carousel__cell');
                var cellCount; // cellCount set from cells-range input value
                var selectedIndex = 0;
                var cellWidth = carousel.offsetWidth;
                var cellHeight = carousel.offsetHeight;
                var isHorizontal = false;
                var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
                var radius, theta;
                // console.log( cellWidth, cellHeight );

                function rotateCarousel() {
                    var angle = theta * selectedIndex * -1;
                    carousel.style.transform = 'translateZ(' + -radius + 'px) ' +
                        rotateFn + '(' + angle + 'deg)';
                }

                var prevButton = document.querySelector('.previous-button');
                prevButton.addEventListener( 'mouseover', function() {
                    myStopFunction();
                });
                var prevButton = document.querySelector('.previous-button');
                prevButton.addEventListener( 'click', function() {
                   selectedIndex--;
                    rotateCarousel();
                });
                var prevButton = document.querySelector('.previous-button');
                prevButton.addEventListener( 'mouseout', function() {
                    myStartFunction();
                });

                var nextButton = document.querySelector('.next-button');
                nextButton.addEventListener( 'mouseover', function() {
                    myStopFunction();
                });
                nextButton.addEventListener( 'click', function() {
                    selectedIndex++;
                    rotateCarousel();
                });
                nextButton.addEventListener( 'mouseout', function() {
                    myStartFunction();
                });
                nextButton.addEventListener( 'click', function() {
                    selectedIndex++;
                    rotateCarousel();
                });

                var cellsRange = document.querySelector('.cells-range');
                cellsRange.addEventListener( 'change', changeCarousel );
                cellsRange.addEventListener( 'input', changeCarousel );



                function changeCarousel() {
                    cellCount = cellsRange.value;
                    theta = 360 / cellCount;
                    var cellSize = isHorizontal ? cellWidth : cellHeight;
                    radius = Math.round( ( cellSize / 2) / Math.tan( Math.PI / cellCount ) );
                    for ( var i=0; i < cells.length; i++ ) {
                        var cell = cells[i];
                        if ( i < cellCount ) {
                            // visible cell
                            cell.style.opacity = "1";
                            // cell.style.background = "#fff"
                            var cellAngle = theta * i;
                            cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
                        } else {
                            // hidden cell
                            cell.style.opacity = "0";
                            // cell.style.background = "#ffffff"
                            cell.style.transform = 'none';
                        }
                    }

                    rotateCarousel();
                }

                var orientationRadios = document.querySelectorAll('input[name="orientation"]');
                ( function() {
                    for ( var i=0; i < orientationRadios.length; i++ ) {
                        var radio = orientationRadios[i];
                        radio.addEventListener( 'change', onOrientationChange );
                    }
                })();

                function onOrientationChange() {
                    var checkedRadio = document.querySelector('input[name="orientation"]:checked');
                    isHorizontal = checkedRadio.value == 'horizontal';
                    rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
                    changeCarousel();
                }

                // set initials
                onOrientationChange();

                // setInterval(()=>{
                //     selectedIndex++;
                //     rotateCarousel();
                //
                //     var ch = 0;
                    // setInterval(()=>{
                    //
                    //     if (ch == 0) {
                    //         isHorizontal = false;
                    //         function onOrientationChange() {
                    //             var checkedRadio = document.querySelector('input[name="orientation"]:checked');
                    //             isHorizontal = checkedRadio.value == 'vertical';
                    //             rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
                    //             changeCarousel();
                    //         }
                    //         onOrientationChange();
                    //         ch = 1;
                    //     }
                    //     else {
                    //         isHorizontal = true;
                    //         function onOrientationChange() {
                    //             var checkedRadio = document.querySelector('input[name="orientation"]:checked');
                    //             isHorizontal = checkedRadio.value == 'horizontal';
                    //             rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
                    //             changeCarousel();
                    //         }
                    //         onOrientationChange();
                    //         ch = 0;
                    //     }
                    //
                    // }, 6000)

                // }, 3000)



                // function startAutoStart() {
                //     var autoStart = setInterval(autoNext, 3000);
                // }
                //
                // function autoNext() {
                //         selectedIndex++;
                //         rotateCarousel();
                // }
                //
                // function stopAutoStart() {
                //     clearInterval(autoStart);
                // }

                var myVar;

                function myStartFunction() {
                    myVar = setInterval(function(){ myTimer() }, 3000);
                }
                myStartFunction();

                function myTimer() {
                    selectedIndex++;
                    rotateCarousel();
                }

                function myStopFunction() {
                    clearInterval(myVar);
                }
            </script>
            <!------------------------------------------------------------------------------------------>


        </div>
    </section>


    <style>
        .hero-box {
            text-transform: uppercase;
            user-select: none;
            padding: 130px;
            background: #ffffff7d;
        }

        .bg-img-1 {
            background: url("assets/imgs/bg-img-1.jpg");
            background-size: cover;
            background-position: center center;

        }

        .hero-box h3 {
            letter-spacing: 5px;
            color: #0067b8;
        }

        h1.dual-heading {
            font-size: 60px;
            font-weight: 400;
            margin-top: 30px;
            margin-left: -5px;
            text-shadow: 0 0 5px #c5c5c5;
        }

        h1.dual-heading span {
            color: #0067b8;
        }

        .hero-box h2 {
            margin-bottom: 50px;
            letter-spacing: 5px;
        }

        .hero-box .cta {
            padding-bottom: 40px;
        }

        .bx-wrapper {
            /*padding: 100px 0;*/
        }

        .bx-wrapper .bx-pager.bx-default-pager a {
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        .slide {
            padding: 200px 50px;
        }

        .bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus {
            background: #0067b8;
        }

        .bx-wrapper .bx-pager-item, .bx-wrapper .bx-controls-auto .bx-controls-auto-item {
            display: block;
            vertical-align: middle;
        }

        .bx-wrapper .bx-pager {
            padding-top: 0px;
        }

        .bx-wrapper .bx-pager.bx-default-pager a {
            margin: 0 auto;
            width: 50px;
            height: 10px;
            margin-bottom: 10px;
        }

        .bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {
            bottom: 20px;
        }
    </style>
    <!-- ---------------------------------------------Hero -->

    <!-- ------------------------Services -->
    <section>
        <div class="wrapper">
            <h1 class="heading"><span>The</span>Services<span>We Provide</span></h1>
            <div class="services-container">

                <div class="service-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/800x500" alt="">
                    </div>
                    <div class="bottom-box">
                        <h3>Service Title Name</h3>
                        <p>Description for service simple dummy text.</p>
                        <a class="call-to-action" href=" #"><span>Read More</span></a>
                    </div>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/800x500" alt="">
                    </div>
                    <div class="bottom-box">
                        <h3>Service Title Name</h3>
                        <p>Description for service simple dummy text.</p>
                        <a class="call-to-action" href=" #"><span>Read More</span></a>
                    </div>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/800x500" alt="">
                    </div>
                    <div class="bottom-box">
                        <h3>Service Title Name</h3>
                        <p>Description for service simple dummy text.</p>
                        <a class="call-to-action" href=" #"><span>Read More</span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ------------------------Services -->


    <!--------------------------------------------Packages-->
    <section class="bg-grey">
        <div class="wrapper">
            <h1 class="heading"><span>The</span>Package<span>Plans</span></h1>
            <div class="package-container">

                <div class="package-box">
                    <div class="pkg-header">
                        <span>01</span>
                        <h1><span>Package One</span></h1>
                        <span>$99.00</span>
                    </div>
                    <h3 class="pkg-highlight">Hilights</h3>
                    <ul>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                    </ul>
                    <h3 class="pkg-highlight">Features</h3>
                    <ul>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                    </ul>
                </div>
                <div class="package-box">
                    <div class="pkg-header">
                        <span>01</span>
                        <h1><span>Package One</span></h1>
                        <span>$99.00</span>
                    </div>
                    <h3 class="pkg-highlight">Hilights</h3>
                    <ul>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                    </ul>
                    <h3 class="pkg-highlight">Features</h3>
                    <ul>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                    </ul>
                </div>
                <div class="package-box">
                    <div class="pkg-header">
                        <span>01</span>
                        <h1><span>Package One</span></h1>
                        <span>$99.00</span>
                    </div>
                    <h3 class="pkg-highlight">Hilights</h3>
                    <ul>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                    </ul>
                    <h3 class="pkg-highlight">Features</h3>
                    <ul>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                        <li><span>Details line for package one</span></li>
                    </ul>
                </div>

            </div>

    </section>
    <!--------------------------------------------Packages-->


    <!-- <a class="call-to-action" href=" #"><span>Read More</span></a>

<a class="call-to-action-primary" href=" #"><span>Read More</span></a>

<a class="call-to-action-black" href=" #"><span>Read More</span></a> -->
    <!--================================================= body-->
<?php include 'inc/footer.php'; ?>