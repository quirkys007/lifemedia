<?php include("header1.php"); ?>
<?php
// Sertakan file config.php
require("config/config.php");

// Buat query SQL untuk mengambil data paket internet dari database
$sql8 = "SELECT * FROM `pelanggan`";
$result8 = $conn->query($sql8);
?>

<main>
    <!-- Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-50 text-center">
                            <h2>Daftar</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Registration Form Start -->
    <div class="section-top-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="mb-30">Registrasi untuk berlangganan</h3>
                <form action="config/regis_proses.php" method="post">
                    <div class="mt-10">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="first_name" placeholder="First Name" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="last_name" placeholder="Last Name" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="inputEmail">Alamat Email</label>
                        <input type="email" id="inputEmail" name="email" placeholder="Email address" required
                            class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <label for="inputAlamat">Alamat</label>
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <input type="text" id="inputAlamat" name="alamat" placeholder="Alamat" required
                            class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <label for="inputLokasi">Lokasi</label>
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <select id="inputLokasi" name="lokasi" required class="single-input">
                            <option value="" disabled selected>Pilih Lokasi</option>
                            <option value="lokasi1">Lokasi 1</option>
                            <option value="lokasi2">Lokasi 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="input-group-icon mt-10">
                        <label for="inputTelp">No telepon/HP</label>
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <input type="text" id="inputTelp" name="no_telepon" placeholder="No. Telepon/Ponsel"
                            required class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <label for="inputPaket">Paket</label>
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <input type="text" id="inputPaket" name="paket" placeholder="Paket" required
                            class="single-input">
                    </div>
                    <p></p>
                    <button type="submit" name="regis" class="borders-btn">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Registration Form End -->

</main>



<?php include("footer1.php"); ?>