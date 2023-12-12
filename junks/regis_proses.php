<?php
//koneksi
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // You can add more validation and sanitation here if needed

    // Check if the username or email is already taken
    $checkUsername = mysqli_query($conn, "SELECT * FROM logadmin WHERE username='$username'");
    $checkEmail = mysqli_query($conn, "SELECT * FROM logadmin WHERE email='$email'");

    if (mysqli_num_rows($checkUsername) > 0) {
        header("location: ../regis.php?pesan=usertaken");
        exit();
    }

    if (mysqli_num_rows($checkEmail) > 0) {
        header("location: ../regis.php?pesan=emailtaken");
        exit();
    }

    // Insert user data into the database
    $hashedPassword = md5($password); // Note: This is not secure, consider using password_hash() and password_verify() for better security
    $insertQuery = "INSERT INTO logadmin (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        header("location: ../login.php?pesan=success");
        exit();
    } else {
        header("location: ../regis.php?pesan=error");
        exit();
    }
} else {
    die("Akses dilarang....");
}
?>
