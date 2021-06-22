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
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.php">CTDEV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Game</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search...." aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- //Header -->

    <!-- main-slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Cover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/EymiXr1WQAAI4Wf.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/FB_IMG_16165870687925569.jpg" class="d-block w-100" alt="...">
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
    </div>
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col "> <br>
                    <h2>Support Us!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
</body>
<footer>
    <!-- Footer -->
    <footer class="text-center mt-3 text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 ">

        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact Us!
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-home me-3"></i> + 01 234 567 89</p>
                        <p><i class="bi bi-whatsapp"></i> + 01 234 567 89 </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021, CTDEV Teams | All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>


</html>