<?php include('header_footer/header.php')?>
<?php
include("proses/config.php");

$sql = "SELECT * FROM `kontak`";
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
                            $alamat = $row["alamat"];
                            $no_telepon = $row["no_telepon"];
                            $email = $row["email"];
                            ?>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputAlamat">alamat</label>
                                        <input type="text" id="inputAlamat" class="form-control" name="alamatEdit"
                                            value="<?php echo $alamat; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="noTelp">no telepon</label>
                                        <input type="text" id="noTelp" class="form-control" name="noTelpEdit"
                                            value="<?php echo $no_telepon; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailInput">email</label>
                                        <input type="text" id="emailInput" class="form-control" name="emailEdit"
                                            value="<?php echo $email; ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_kontak" class="btn btn-primary">Simpan
                                            Dan Ubah</button>
                                    </div>
                                    <?php
                                    // Fungsi edit data alternatif
                                    if (isset($_POST['edit_kontak'])) {
                                        $alamat1 = $_POST['alamatEdit'];
                                        $telp = $_POST['noTelpEdit'];
                                        $email1 = $_POST['emailEdit'];
                                        $sql = "UPDATE kontak SET alamat='$alamat1', no_telepon='$telp', email='$email1' WHERE id=$id";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "<script>
                                        alert('data berhasil di edit');
                                        document.location.href = 'edit_kontak.php';
                                        </script>";
                                        } else {
                                            echo "<script>
                                        alert('data gagal di edit');
                                        document.location.href = 'edit_kontak.php';
                                        </script>";
                                        }
                                    }
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

<?php include('header_footer/footer.php')?>