<?php
// display_comments.php

// Include the database configuration file
require("config.php");

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Prepare and execute SQL statement to select comments
// $sql = "SELECT nama, email, komen, waktu FROM komen";
// $result = $conn->query($sql);

// // Display comments
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<p><strong>{$row['nama']} ({$row['email']}):</strong> {$row['komen']}</p>";
//     }
// } else {
//     echo "No comments yet.";
// }

// Fungsi hapus data alternatif
if (isset($_POST['delete_id'])) {
    $id2 = $_POST['id_del'];
    $sql = "DELETE FROM komen WHERE id=$id2";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                                    alert('data berhasil di hapus');
                                    document.location.href = '../display_komen.php';
                                    </script>";
    } else {
        echo "<script>
                                     alert('data gagal di hapus');
                                    document.location.href = '../display_komen.php';
                                    </script>";
    }
}

// Close connection
$conn->close();
?>
