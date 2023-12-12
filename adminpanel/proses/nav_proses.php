<?php
include("config.php");
//pengecekan form 
if (isset($_POST['edit_nav'])) {
    $id = $_POST['id1'];
    $nav1 = $_POST['navi1'];
    $nav2 = $_POST['navi2'];
    $nav3 = $_POST['navi3'];
    $nav4 = $_POST['navi4'];
    $nav5 = $_POST['navi5'];
    $nav6 = $_POST['navi6'];
    $nav7 = $_POST['navi7'];
    $nav8 = $_POST['navi8'];

    // Menggunakan parameter yang sudah disiapkan untuk update database
    $sql = "UPDATE navbar SET navbar1=?, navbar2=?, navbar3=?, navbar4=?, navbar5=?, navbar6=?, navbar7=?, navbar8=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $nav1, $nav2, $nav3, $nav4, $nav5, $nav6, $nav7, $nav8, $id);

    if ($stmt->execute()) {
        // Jika sukses: Dialihkan ke edit_nav.php
        echo "<script>
                                                alert('data berhasil di edit');
                                                document.location.href = '../edit_nav.php';
                                                </script>";
    } else {
        // Jika gagal: Dialihkan ke edit_nav.php
        echo "<script>
                                                alert('data gagal di edit');
                                                document.location.href = '../edit_nav.php';
                                                </script>";
    }

    // Menutup statement
    $stmt->close();
}
?>