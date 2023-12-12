<?php
include("header1.php");
?>
<?php include("config/filter_produk.php") ?>
<?php
// Sertakan file config.php
// require("config/config.php");

// // Buat query SQL untuk mengambil data paket internet dari database
// $sql3 = "SELECT * FROM `produk` WHERE `id_lokasi`>=1 AND `active` <=1";
// $result = $conn->query($sql3);
?>

<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <h2><strong>Produk Kami</strong></h2>
                            <!-- <h2>Pilih Paket Layananmu</h2> -->
                            <p style="color: #000000;"><strong>Layanan Internet "life style" & Cable TV "Life
                                    Vision"+"Life
                                    VU"</p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Pricing Card Start -->
    <div class="pricing-card-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                    <div class="section-tittle text-center mb-100">
                        <!-- <p style="color: #000000;"><strong>Produk Kami</strong></p> -->
                        <h2>Pilih Paket Layananmu</h2>
                        <!-- <p style="color: #000000;"><strong>Layanan Internet "life style" & Cable TV "Life
                                Vision"+"Life
                                VU"</p> -->
                        </strong>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="mt-3 text-center">
            <label for="categoryFilter">Filter by Category:</label>
            <div class="category-buttons">
                <button class="filter-button" data-category="all" onclick="filterButtons('all')">All</button>
                <button class="filter-button" data-category="category1" onclick="filterButtons('category1')">Category
                    1</button>
                <button class="filter-button" data-category="category2" onclick="filterButtons('category2')">Category
                    2</button>
            </div>
        </div> -->

        <!-- Filter Buttons -->
        <div class="text-center" id="filter">
            <a class="filter-button" href="package.php?filter=semua" data-filter="semua">Semua</a>
            <a class="filter-button" href="package.php?filter=Yogyakarta" data-filter="Yogyakarta">Yogyakarta</a>
            <a class="filter-button" href="package.php?filter=Tanggerang" data-filter="Tanggerang">Tangggerang</a>
            <a class="filter-button" href="package.php?filter=DKI Jakarta" data-filter="DKI Jakarta">DKI Jakarta</a>
            <a class="filter-button" href="package.php?filter=Bogor" data-filter="Bogor">Bogor</a>
        </div>

        <p></p>
        <!-- Section Tittle -->
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row4 = $result->fetch_assoc()) {
                    // Ambil data dari database dan masukkan ke dalam template HTML
                    $nama = $row4["nama"];
                    $harga = $row4["harga"];
                    $deskripsi = html_entity_decode($row4['deskripsi']);
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
                }
            } else {
                echo "Tidak ada data paket internet.";
            }

            // Tutup koneksi setelah selesai
            $conn->close();
            ?>
        </div>
    </div>
    </div>
</main>
<?php
include("footer1.php");
?>