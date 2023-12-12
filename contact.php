<?php
include("header1.php");
?>

<?php
require("config/config.php");

$sql6 = "SELECT * FROM kontak";
$result6 = mysqli_query($conn, $sql6);
?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-50 text-center">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div class="row">
                    <?php
                    if ($result6->num_rows > 0) {
                        while ($row7 = $result6->fetch_assoc()) {
                            // Ambil data dari database dan masukkan ke dalam template HTML
                            $alamat = $row7["alamat"];
                            $noTelp = $row7["no_telepon"];
                            $email = $row7["email"];
                            ?>
                            <div class="col-12">
                                <h2 class="contact-title">Get in Touch</h2>
                            </div>
                            <div class="col-lg-8">
                                <form class="form-contact contact_form" action="contact_process.php" method="post"
                                    id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="message" id="message" cols="30"
                                                    rows="9" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter Message'"
                                                    placeholder=" Enter Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="name" id="name" type="text"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="email" id="email" type="email"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" name="subject" id="subject" type="text"
                                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                                    placeholder="Enter Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 offset-lg-1">
                                <div class="media contact-info">
                                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                                    <div class="media-body">
                                        <h3><?php echo $alamat;?></h3>
                                    </div>
                                </div>
                                <div class="media contact-info">
                                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                    <div class="media-body">
                                        <h3><?php echo $noTelp?></h3>
                                        <p>Mon to Fri 9am to 6pm</p>
                                    </div>
                                </div>
                                <div class="media contact-info">
                                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                                    <div class="media-body">
                                        <h3><?php echo $email;?></h3>
                                        <p>Send us your query anytime!</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "Tidak ada data paket internet.";
                    }

                    // Tutup koneksi setelah selesai
                    $conn->close();
                    ?>
                </div>
            </div>
    </section>
    <!-- Contact Area End -->
</main>
<?php
include("footer1.php");
?>