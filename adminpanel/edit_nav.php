<?php include("header_footer/header.php") ?>
<?php
//memanggil fungsi koneksi ke database
include("proses/config.php");

$sql = "SELECT * FROM `navbar`";
$result = $conn->query($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>
                    </div>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Ambil data dari database dan masukkan ke dalam template HTML
                            $id = $row["id"];
                            $navbar1 = $row["navbar1"];
                            $navbar2 = $row["navbar2"];
                            $navbar3 = $row["navbar3"];
                            $navbar4 = $row["navbar4"];
                            $navbar5 = $row["navbar5"];
                            $navbar6 = $row["navbar6"];
                            $navbar7 = $row["navbar7"];
                            $navbar8 = $row["navbar8"];
                            ?>
                            <form action="proses/nav_proses.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id">ID</label>
                                        <input type="text" class="form-control" name="id1" id="id" value="<?php echo $id; ?>"
                                            readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">navbar1</label>
                                        <input type="text" id="inputName" class="form-control" name="navi1"
                                            value="<?php echo $navbar1; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi1">navbar2</label>
                                        <input type="text" id="navigasi1" class="form-control" name="navi2"
                                            value="<?php echo $navbar2; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi2">navbar3</label>
                                        <input type="text" id="navigasi2" class="form-control" name="navi3"
                                            value="<?php echo $navbar3; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi3">navbar4</label>
                                        <input type="text" id="navigasi3" class="form-control" name="navi4"
                                            value="<?php echo $navbar4; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi4">navbar5</label>
                                        <input type="text" id="navigasi4" class="form-control" name="navi5"
                                            value="<?php echo $navbar5; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi5">navbar6</label>
                                        <input type="text" id="navigasi5" class="form-control" name="navi6"
                                            value="<?php echo $navbar6; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi6">navbar7</label>
                                        <input type="text" id="navigasi6" class="form-control" name="navi7"
                                            value="<?php echo $navbar7; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="navigasi7">navbar8</label>
                                        <input type="text" id="navigasi7" class="form-control" name="navi8"
                                            value="<?php echo $navbar8; ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_nav" class="btn btn-primary">Simpan
                                            Dan Ubah</button>
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
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>

    <?php include("header_footer/footer.php") ?>