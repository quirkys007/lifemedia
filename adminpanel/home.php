<?php
require_once("proses/config.php");

// Buat query SQL untuk mengambil data paket internet dari database
$sql = "SELECT * FROM `produk`";
$result = $conn->query($sql);
?>
<?php include("header_footer/header.php")?>
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
                                        $deskripsi = $row["deskripsi"];
                                        $jenis = $row["jenis"];
                                        $status = $row["active"];

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
                                                <a class="btn btn-info btn-sm" >
                                                    <i type="submit" class="fas fa-pencil-alt" data-target="btnEdit">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" >
                                                    <i type="submit" class="fas fa-trash" name="btnDelete">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
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

    <?php include("header_footer/footer.php")?>