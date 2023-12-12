<?php
ob_start();
require_once("proses/config.php");
session_start();

// Buat query SQL untuk mengambil data paket internet dari database
$sql = "SELECT * FROM `produk`";
$result = $conn->query($sql);
?>
<?php include("header_footer/header.php"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#addPaket"><i
                class="far fa-plus-square"></i> Tambah Data</button>
        <!-- Modal -->
        <div class="modal fade" id="addPaket" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alternatif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="proses/paket_proses.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama2">nama</label>
                                <input type="text" class="form-control" name="addNama" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="harga2">harga</label>
                                <input type="text" class="form-control" name="addHarga" id="harga" required>
                            </div>
                            <div class="form-group">
                                <label for="desc">deskripsi</label>
                                <input type="text" class="form-control" name="addDesc" id="desc" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis2">jenis</label>
                                <select class="form-control" name="addJenis" id="jenis" required>
                                    <option value="internet">Internet</option>
                                    <option value="tvkabel">TV Kabel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lokasi2">id_lokasi</label>
                                <input type="text" class="form-control" name="addIdloc" id="lokasi2" required>
                            </div>
                            <div class="form-group">
                                <label for="status2">status</label>
                                <input type="text" class="form-control" name="addStatus" id="status" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_paket" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                id
                            </th>
                            <th style="width: 20%">
                                Nama Paket
                            </th>
                            <th style="width: 8%" class="text-center">
                                Harga
                            </th>
                            <th>
                                Deskripsi
                            </th>
                            <th>
                                Jenis
                            </th>
                            <th style="width: 5%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Ambil data dari database dan masukkan ke dalam template HTML
                                $id = $row["id_paket"];
                                $nama = $row["nama"];
                                $harga = $row["harga"];
                                $deskripsi = html_entity_decode($row['deskripsi']);
                                $jenis = $row["jenis"];
                                $status = $row["active"];

                                $harga = floatval($harga);
                                $nominal_format = "Rp " . number_format($harga, 0, ',', '.');
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $id; ?>
                                    </td>
                                    <td>
                                        <?php echo $nama; ?>
                                    </td>
                                    <td>
                                        <?php echo $nominal_format; ?>
                                    </td>
                                    <td>
                                        <?php echo $deskripsi; ?>
                                    </td>
                                    <td>
                                        <?php echo $jenis; ?>
                                    </td>
                                    <td>
                                        <?php echo $status; ?>
                                    </td>
                                    <td class="project-actions text-right">
                                        <!-- <a class="btn btn-info btn-sm">
                                                    <i type="submit" class="fas fa-pencil-alt" data-toggle="modal"
                                                        data-target="#btnEdit">
                                                    </i>
                                                    Edit
                                                </a> -->
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#btnEdit<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></button>
                                        <!-- <a class="btn btn-danger btn-sm">
                                                    <i type="submit" class="fas fa-trash" data-toggle="modal"
                                                        data-target="#btnDelete">
                                                    </i>
                                                    Delete
                                                </a> -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#btnDelete<?php echo $id; ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="btnEdit<?php echo $id; ?>" tabindex="-1"
                                    aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit paket</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="proses/paket_proses.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="id">ID paket</label>
                                                        <input type="text" class="form-control" name="id" id="id"
                                                            value="<?php echo $id; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama2">nama</label>
                                                        <input type="text" class="form-control" name="nama2" id="nama"
                                                            value="<?php echo $nama; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga2">harga</label>
                                                        <input type="text" class="form-control" name="harga2" id="harga"
                                                            value="<?php echo $harga; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="desc">deskripsi</label>
                                                        <input type="text" class="form-control" name="deskripsi2" id="desc"
                                                            value="<?php echo $deskripsi; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis2">jenis</label>
                                                        <input type="text" class="form-control" name="jenis2" id="jenis"
                                                            value="<?php echo $jenis; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status2">status</label>
                                                        <input type="text" class="form-control" name="status2" id="status"
                                                            value="<?php echo $status; ?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" name="edit_paket" class="btn btn-primary">Simpan
                                                        Dan Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- tutup modal -->
                                <!--modal edit-->
                                <div class="modal fade" id="btnDelete<?php echo $id; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="proses/paket_proses.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_del" value="<?php echo $id; ?>">
                                                    <p>Apakah anda Yakin akan menghapus id(
                                                        <?php echo $id; ?>) ini ?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" name="delete_id"
                                                        class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tutup delete-->
                            </tbody>
                            <?php
                            }

                        } else {
                            echo "Tidak ada data paket internet.";
                        }

                        // Tutup koneksi setelah selesai
                        $conn->close();
                        ?>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include("header_footer/footer.php");
ob_end_flush();
?>