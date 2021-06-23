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


    <!-- //Header -->

    <!-- main-slider -->
    <section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Cover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/FightTheVirusCover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/backGroundGamePage.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/MainMenuColorUnity.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <section id="support">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col mt-5"> <br>
                    <h2>Support Us!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                        Terima kasih, pesan anda telah terkirim!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="kontak">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
                        <button class="btn btn-primary d-none btn-loading" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
    <!-- Footer -->
    <footer class="text-center mt-3 text-lg-start  text-muted" style="background-color: #1e1e1e;">
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
            <div class="text-center p-4 bg-dark">
                <p style="color: #FAE8E0;">© 2021, CTDEV Teams | All rights reserved. </p>
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