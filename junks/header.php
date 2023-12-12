<?php
require_once("config/config.php");

// Buat query SQL untuk mengambil data paket internet dari database
$sql2 = "SELECT * FROM `navbar`";
$result2 = $conn->query($sql2);
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- icon logo web -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Lifemedia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo lho.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main1.css">

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo lif.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader end -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo Home-->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="home.php"><img src="assets/img/logo/logo lif.png" alt=""></a>
                                </div>
                                <!-- ukuran logo Home -->

                                <style>
                                    .logo img {
                                        width: 150px;
                                        /* Ganti dengan lebar yang Anda inginkan */
                                        height: 50px;
                                        /* Ini akan menjaga aspek rasio logo */
                                    }
                                </style>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <?php
                                        // if ($result2->num_rows > 0) {
                                        //     while ($row5 = $result2->fetch_assoc()) {
                                        //         // Ambil data dari database dan masukkan ke dalam template HTML
                                        //         $nav1 = $row5["navbar1"];
                                        //         $nav2 = $row5["navbar2"];
                                        //         $nav3 = $row5["navbar3"];
                                        //         $nav4 = $row5["navbar4"];
                                        //         $nav5 = $row5["navbar5"];
                                        //         $nav6 = $row5["navbar6"];
                                                ?>
                                                <nav>
                                                    <ul id="navigation">
                                                        <li><a href="home.php">home
                                                            </a></li>
                                                        <li><a href="home.php #about">tentang
                                                            </a></li>
                                                        <li><a href="package.php">paket
                                                            </a></li>
                                                        <li><a href="features.php">fitur
                                                            </a></li>
                                                        <li><a href="blog.php">Blog</a>
                                                            <ul class="submenu">
                                                                <li><a href="blog.php">Blog</a></li>
                                                                <li><a href="FAQs.php">FAQs</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="contact.php">kontak
                                                            </a></li>
                                                        <li><a href="area.php">area
                                                            </a></li>
                                                        <!-- <li><a href="regis.php">Daftar
                                                    </a></li> -->
                                                    </ul>
                                                </nav>
                                                <?php
                                        //     }
                                        // } else {
                                        //     echo "Tidak ada data paket internet.";
                                        // }

                                        // // Tutup koneksi setelah selesai
                                        // $conn->close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>