<?php
include("config.php");

// Check if the form has already been submitted
if (isset($_SESSION['form_submitted'])) {
    echo "<script>
        alert('Form already submitted');
        document.location.href = '../edit_paket.php';
        </script>";
    exit; // or redirect to another page
}

// Fungsi tambah data alternatif
if (isset($_POST['add_paket'])) {
    $addnama = $_POST['addNama'];
    $addharga = $_POST['addHarga'];
    $adddesc = $_POST['addDesc'];
    $addjenis = $_POST['addJenis'];
    $addidlok = $_POST['addIdloc'];
    $addstatus = $_POST['addStatus'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO produk(`nama`, `harga`, `deskripsi`, `jenis`, `id_lokasi`, `active`, `timestamps`) VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");

    // Bind parameters
    $stmt->bind_param("ssssss", $addnama, $addharga, $adddesc, $addjenis, $addidlok, $addstatus);

    // Execute the statement
    if ($stmt->execute()) {
        // Set the form_submitted session variable to prevent duplicate submissions
        $_SESSION['form_submitted'] = true;

        // Redirect to avoid resubmission
        header("Location: ../edit_paket.php");
        exit();
    } else {
        echo "<script>
            alert('data gagal di tambah');
            document.location.href = '../edit_paket.php';
            </script>";
    }

    // Close the statement
    $stmt->close();
}


// Fungsi edit data alternatif
if (isset($_POST['edit_paket'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama2'];
    $harga = $_POST['harga2'];
    $deskripsi = $_POST['deskripsi2'];
    $jenis = $_POST['jenis2'];
    $status = $_POST['status2'];
    $sql = "UPDATE `produk` SET `nama`='$nama', `harga`='$harga', `deskripsi`='$deskripsi', `jenis`='$jenis', `active`='$status' WHERE id_paket=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                                    alert('data berhasil di edit');
                                    document.location.href = '../edit_paket.php';
                                    </script>";
    } else {
        echo "<script>
                                    alert('data gagal di edit');
                                    document.location.href = '../edit_paket.php';
                                    </script>";
    }
}

// Fungsi hapus data alternatif
if (isset($_POST['delete_id'])) {
    $id2 = $_POST['id_del'];
    $sql = "DELETE FROM produk WHERE id_paket=$id2";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                                    alert('data berhasil di hapus');
                                    document.location.href = '../edit_paket.php';
                                    </script>";
    } else {
        echo "<script>
                                    alert('data gagal di hapus');
                                    document.location.href = '../edit_paket.php';
                                    </script>";
    }
}
?>