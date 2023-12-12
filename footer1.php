<?php
require("config/config.php");

$sql6 = "SELECT * FROM kontak";
$result6 = mysqli_query($conn, $sql6);
?>
<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.png">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row7 = $result6->fetch_assoc()) {
                            // Ambil data dari database dan masukkan ke dalam template HTML
                            $alamat = $row7["alamat"];
                            $noTelp = $row7["no_telepon"];
                            $email = $row7["email"];
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="assets\img\logo-life-media-dan-sims-1024x213-copy.png "
                                                width=" 150" height="50" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">
                                                <?php echo $alamat; ?>
                                        </div>
                                    </div>
                                    <div class="footer-number">
                                        <h4>
                                            <?php echo $noTelp; ?>
                                        </h4>
                                        <P style="color: greenyellow;">WA Area Jogja</P>
                                        <p>
                                            <?php echo $email; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="custom_html-8" class="widget_text widget widget_custom_html">
                                <h3 class="header-widget "><span class="widget-icon"></span>Our Location<span
                                        class="last widget-icon"></span></h3>
                                <div class="textwidget custom-html-widget"><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6672555588602!2d110.36567931448178!3d-7.824998679886871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5926b951619f%3A0x1e5e08ffddad21c6!2sLife%20Media!5e0!3m2!1sen!2sid!4v1670489040422!5m2!1sen!2sid"
                                        width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                            </div>
                            <!-- Alternatif map pakai openstreetmap -->
                            <!-- <iframe width="425" height="350"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=110.36657094955446%2C-7.82585014809478%2C110.36927998065948%2C-7.82414154680639&amp;layer=mapnik&amp;marker=-7.824997176942728%2C110.36792546510696"
                        style="border: 1px solid black"></iframe><br /><small><a
                            href="https://www.openstreetmap.org/?mlat=-7.82500&amp;mlon=110.36793#map=19/-7.82500/110.36793">View
                            Larger Map</a></small> -->
                            <?php
                        }
                    } else {
                        echo "Nothing";
                    }

                    // Tutup koneksi setelah selesai
                    $conn->close();
                    ?>
                </div>
                <!--Script untuk widget WATI whatsapp-->
                <script>
                    var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?61196';
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = url;
                    var options = {
                        "enabled": true,
                        "chatButtonSetting": {
                            "backgroundColor": "#00e785",
                            "ctaText": "",
                            "borderRadius": "25",
                            "marginLeft": "0",
                            "marginRight": "20",
                            "marginBottom": "20",
                            "ctaIconWATI": false,
                            "position": "left"
                        },
                        "brandSetting": {
                            "brandName": "WA widget",
                            "brandSubTitle": "undefined",
                            "brandImg": "https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                            "welcomeText": "Hai\nAda yang bisa dibantu",
                            "messageText": "",
                            "backgroundColor": "#00e785",
                            "ctaText": "",
                            "borderRadius": "25",
                            "autoShow": false,
                            "phoneNumber": "6285643145334"
                        }
                    };
                    s.onload = function () {
                        CreateWhatsappChatWidget(options);
                    };
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                </script>
                <!--copyright-->
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <!-- <p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template
                                    is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                    </p> -->
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/lifemediaaja"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://goo.gl/maps/iXxHggvga2z1CcN56"><!--<a href="#">--><i
                                        class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
</footer>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>
<!-- Openstreetmap -->

<!-- <script src="assets\js\map.js"></script> -->
<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!--flexslider jquery-->
<!-- <script src="assets/lib/flexslider/jquery.flexslider.js"></script> -->

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

<!--script js filterButtons-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const urlParams = new URLSearchParams(window.location.search);
        const filterParam = urlParams.get("filter");

        // Dapatkan semua tombol filter
        const filterButtons = document.querySelectorAll('.filter-button');

        // Loop melalui setiap tombol filter
        filterButtons.forEach(button => {
            // Periksa apakah nilai data-filter pada tombol filter sesuai dengan filterParam
            if (button.getAttribute('data-filter') === filterParam) {
                // Jika sesuai, tambahkan kelas 'active' pada tombol tersebut
                button.classList.add('active');
            }
        });
    });
</script>

<!--tabpanel-->
<script src="./assets/js/tabpanel.js"></script>

<!-- script leaflet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</body>

</html>