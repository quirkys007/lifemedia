<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['regis'])) {
    // Get user input from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $paket = $_POST['paket'];

    // Prepare the SQL statement
    $sql = "INSERT INTO `pelanggan`(`first_name`, `last_name`, `email`, `alamat`, `no_telepon`, `paket`) 
    VALUES (?, ?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $alamat, $no_telepon, $paket);

    // Execute the statement
    if ($stmt->execute()) {
        // Success: Redirect or show a success message
        echo "<script>
            alert('Registrasi berhasil!');
            window.location.href = '../index.php';
            </script>";
    } else {
        // Failure: Redirect or show an error message
        echo "<script>
            alert('Registrasi gagal. Silakan coba lagi.');
            window.location.href = '../regis.php';
            </script>";
    }

    // Close the statement
    $stmt->close();
}
?>