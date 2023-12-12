<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css"
    integrity="sha384-nzG9T7fACt6Uq4z/J5mN49LrR+QIMwo0Rpgx7LQpyIqzU9J9LQ5I6UvcY++RDOdd" crossorigin="anonymous">

<?php
include("header1.php");
?>

<?php
// Sertakan file config.php
require("config/config.php");

// Buat query SQL untuk mengambil data paket internet dari database
$sql3 = "SELECT * FROM `produk` WHERE `id_lokasi`>=1";
$result3 = $conn->query($sql3);
?>

<main>
    <!-- Bootstrap Carousel (Flexslider) -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/5_EN.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-flex justify-content-start align-items-center">
                    <div>
                        <p class="custom-paragraph-style"
                            style="font-size: 24px; word-wrap: break-word; max-width: 400px;">
                            wkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkw
                        </p>
                    </div>
                    <div>
                        <h5>wkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkw</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/2.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block text-left" style="font-size: 24px;">
                    <h5>wkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkw</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/11.png" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block text-left" style="font-size: 24px;">
                    <h5>wkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkw</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/lulu.png.PNG" class="d-block w-100" alt="Slide 4">
                <div class="carousel-caption d-none d-md-block text-left" style="font-size: 24px;">
                    <h5>wkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkw</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-50 text-center">
                            <h2>Home</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- slider Area End-->
    <!--? About 1 Start-->
    <p> </p>
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption" id="about">
                                <h1 data-animation="fadeInUp" data-delay=".4s"><span style="color:#b33f5e;">Life
                                        media</span> Broadband Internet, Cable TV, & Voice.</h1>
                                <P data-animation="fadeInUp" data-delay=".6s">Life Media Adalah Broadband solusi
                                    untuk
                                    layanan internet, Cable TV, Voice dan lainnya yang menggunakan teknologi
                                    FTTH (Fiber
                                    Optic To The Home). Dengan kecepatan akses internet yang dapat dipilih oleh
                                    pelanggan disesuaikan dengan kebutuhannya, kwalitas siaran televisi HD & SD
                                    sehingga
                                    dapat dinikmati dengan maksimal. Terutama pesawat televisi yang sudah
                                    mengadopsi
                                    fitur DVB-T/T2, layanan voice dimana biaya percakapan yang lebih terjangkau,
                                    pembayarannya sesuai dengan pemakaiannya.</P>
                                <div class="hero__btn">
                                    <a href="package.php" class="btn hero-btn mb-10" data-animation="fadeInUp"
                                        data-delay=".8s">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-9">
                    <!-- about-img -->
                    <div class="about-img">
                        <img src="assets/img/live-sport.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span></span>
                            <h2>Dengan Paket Life Vu<span style="color:#b33f5e;">Kamu Bisa Ngikutin Channel
                                    Kesukaanmu</span>
                            </h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p> -->
                        </div>
                        <p>Dengan paket LifeVU ada lebih dari 50 digital channel dengan 80 ribu per bulan dan 20 channel
                            hd cuma dengan 150 ribu per bulan.⁣ Kamu bisa ngikutin channel kesukaanmu, yakin kamu ga
                            pengen stay on dengan channel favorit dan tontonan andalan kamu saat lagi waktu luang?⁣ </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module" id="services">
        <div class="container">
            <!-- <div class="row"> -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                    <div class="section-tittle text-center mb-100">
                        <p>Keunggulan</p>
                        <h2>Mengapa Produk Kami Yang Terbaik.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row multi-columns-row">
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Ideas and concepts</h3>
                    <p>Ada kendala dengan layanan kami ?
                        Team support kami siap memberikan pelayanan selama 24jam Non stop untuk internet Anda segera
                        normal.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Optimised for speed</h3>
                    <p>Hanya ingin berlangganan Digital TV ??? Bisa !....
                        berlangganan telephone bundling dengan internet ?? Bisa !
                        atau berlangganan Internet bonus Digital TV ??? Bisa !..
                        Life Media menghadirkan paket bundling yang jauh lebih flexible.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Designs &amp; interfaces</h3>
                    <p>Dengan jaringan Fiber Optik, dapat mempercepat koneksi internet ,
                        memberikan kenyaman dalam penggunaan internet. Kami memberikan kualitas koneksi internet.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Highly customizable</h3>
                    <p>Dengan 50 channel premium siaran Televisi kualitas Standard Definition (SD) dan High Definition
                        (HD) dan suara jernih.
                        Bisa memanjakan Anda di depan Televisi.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Coding &amp; development</h3>
                    <p>Dengan layanan kami semua aktifitas internetmu bisa dengan mudah di kerjakan.
                        Dan dalam aktifitas yang melelahkan dapat di manjakan dengan siaran TV kualitas HD dan SD.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Features &amp; plugins</h3>
                    <p>Dengan menggunakan satu pemancar wifi bisa mencakup area rumah Anda.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Responsive design</h3>
                    <p>Life media, pelanggan akan dimudahkan untuk memilih provider yang sesuai dengan kebutuhan.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Dedicated support</h3>
                    <p>Layanan Life media tidak ada kuota, tidak ada deposit, tidak ada biaya tambahan,
                        tidak ada batasan download torrent, content multi tenantcy platform.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="features-item">
                    <div class="features-icon"><span class="flaticon-null-3"></span></div>
                    <h3 class="features-title font-alt">Dedicated support</h3>
                    <p>Smarthome, pelanggan dapat mengakses fitur smarthome salah satunya adalah cctv
                        dan fitur lainnya yang akan terus dikembangkan sesuai kebutuhan pelanggan serta perkembangan
                        teknologinya.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- service Area End -->
    <!--? Pricing Card Start -->
    <section class="pricing-card-area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                    <div class="section-tittle text-center mb-100">
                        <p>Our pricing plan for you</p>
                        <h2>No hidden charges! choose your plan wisely.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $count = 0; //menghitung loop
                if ($result3->num_rows > 0) {
                    while ($row4 = $result3->fetch_assoc()) {
                        // Ambil data dari database dan masukkan ke dalam template HTML
                        $nama = $row4["nama"];
                        $harga = $row4["harga"];
                        $deskripsi = $row4["deskripsi"];
                        $jenis = $row4["jenis"];

                        $nominal_format = "Rp " . number_format($harga, 0, ',', '.');
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="single-card text-center mb-100">
                                <div class="card-top">
                                    <p>
                                        <?php echo $jenis; ?>
                                    </p>
                                    <h4>
                                        <?php echo $nama; ?>
                                    </h4>

                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>
                                            <?php echo $deskripsi; ?>
                                        </li>
                                    </ul>
                                    <h4>
                                        <strong>
                                            <?php echo $nominal_format; ?>
                                        </strong><strong>/ bulan</strong>
                                    </h4>
                                    <a href="regis.php" class="borders-btn"><strong>Daftar</strong></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                        if ($count >= 3) {
                            break; // Hentikan loop setelah menampilkan 3 rekomendasi
                        }
                    }
                } else {
                    echo "Tidak ada data paket internet.";
                }
                ?>
            </div>
        </div>
    </section>
    <div class="latest-wrapper">
        <div class="container">
            <div class="latest-area latest-height section-bg2" data-background="assets/img/bgglobe.jpg">
                <div class="row  align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                        <div class="latest-caption">
                            <h2>Check our unbelievable super fast Broadband availability in your area.</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-10 ">
                        <div class="latest-subscribe">
                            <a href="area.php" class="transparent-btn"><strong>Cek Area</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? About-2 Area Start -->
    <section class="about-area2 testimonial-area section-padding30 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-lg-6 col-md-9 col-sm-9">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-55">
                            <h2>What our clint think about us!</h2>
                        </div>
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                    <div class="rattiong-caption">
                                        <span>Jhon Smith<span>Gym Trainer</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                    <div class="rattiong-caption">
                                        <span>Jhon Smith<span>Gym Trainer</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
                <div class="col-lg-5 col-md-11 col-sm-11">
                    <!-- about-img -->
                    <div class="about-img2">
                        <img src="assets/img/gallery/about2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-2 Area End -->

    <!--? Blog Area Start -->
    <section class="comment-section section-padding" id="comment">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="comment-form">
                        <h3>Leave a Comment</h3>
                        <form action="config/proses_komen.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="comment" class="form-control" rows="5"
                                            placeholder="Your Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>

<!-- Bootstrap and Flexslider JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js"
    integrity="sha384-cQ+Y6Sd5qfLKc9p1K9CdLGktFbI9q5uKnM+bb2lB9BFqqu7y5O97Z/YmZQn+U9cS"
    crossorigin="anonymous"></script>

<!-- Initialize Flexslider -->
<script>
    $(document).ready(function () {
        $('#carouselExample').flexslider({
            animation: "slide",
            controlNav: false,
            slideshow: true,
            slideshowSpeed: 5000,
            animationSpeed: 600,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>

<?php
include("footer1.php");
?>