<?php
session_start();
include 'dbconnect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>CTDev</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="bootstrap/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- //JS -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="bootstrap/js/easing.js"></script>
    <script type="text/javascript" src="bootstrap/js/move-top.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrolltop: $(this.hash).offset().top
            }, 1000);
        });
    });
    </script>

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.php">CTDEV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto me-3 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                    <li class="nav-item mx-3">
                        <a class="nav-link" href="game.php">Game</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#support">Support</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 btn-search d-none" type="search" placeholder="Search...."
                        aria-label="Search">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search btn-ikon  " aria-hidden="true" style="color: #ffffff;"> </i>
                </form>
            </div>
        </div>
    </nav>


    <section id="game">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Game</h2>
                    <hr style="padding: -5px;" style="width: 150px;">
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col">
                    <div class="card h-100" style="border: none;" data-aos="flip-left" data-aos-duration="500"
                        data-aos-offset="300">
                        <img src="images/bg33.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class=" text-center"><a
                                    href="https://drive.google.com/drive/folders/1pDQqhrDTd94nIHvYxEcMIwPfgixwA95F?usp=sharing">Deeprive</a>
                            </h5>
                        </div>
                    </div>
                </div>

    </section>

</body>
<footer>
    <!-- Footer -->
    <footer class="text-center mt-5  text-lg-start  text-muted" style="background-color: #1e1e1e;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 ">

        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <footer class="text-center mt-3 text-lg-start  text-muted" style="background-color: #1e1e1e;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 ">

            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section id="footer">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4" style="color: #FAE8E0;;">
                                <i class="fas fa-gem me-3"></i>About Developer
                            </h6>
                            <p>
                                @CTDev
                                Sebuah studio kecil yang dikembangkan oleh 1 orang dimana permainan mobile dibuat secara
                                teliti dan tertata.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-3">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4" style="color: #FAE8E0;">
                                Contact Us!
                            </h6>
                            <p><i class="bi bi-house-door"></i> Jl. Apel VI A12/10, Taman Pagelaran, Ciomas, Bogor. Jawa
                                Barat</p>
                            <p>
                                <i class="bi bi-envelope"></i>
                                clicktarget20@gmail.com
                            </p>
                            <p><i class="bi bi-whatsapp"></i> +62 813-8668-0720 </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="mt-2 text-center p-4 bg-dark">
                <p class="mt-4" style="color: #FAE8E0;">© 2021, CTDEV Teams | All rights reserved. </p>
            </div>
            <!-- Copyright -->
        </footer>


        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>

        <script>
        const btnSearch = document.querySelector('.btn-search');
        const btnIkon = document.querySelector('.btn-ikon');
        addEventListener('submit', e => {
            e.preventDefault();
            btnSearch.classList.toggle('d-none');
            btnIkon.classList.toggle();
        })
        </script>

        <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbwgSfaMX0nVbJIKdB3yBdOMh16msd2vkL0bubbWQKH_rq9VSbLjmGIdpjcv4tK1dHfJ/exec'
        const form = document.forms['kontak'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault();
            // ketika tombol submit di klik
            // tampilkan tombol loading hilangkan tombol kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    // tampilkan tombol kirim hilangkan tombol loading
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    // tampilkan alert
                    myAlert.classList.toggle('d-none');
                    // reset formnya
                    form.reset();
                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        })
        </script>


</html>