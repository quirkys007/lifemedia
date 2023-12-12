<?php
// include('config.php');
// if (isset($_POST)){
//     $username = $_POST['username'];
//     $password= $_POST['password'];

//     //menyeleksi data cust dengan username dan password yang sesuai
//     $statement = mysqli_query($conn, "SELECT * FROM logadmin WHERE username='$username' and password='$password'");
//     $row = mysqli_num_rows($statement);
//     // oci_execute($statement);
//     // oci_fetch($statement);
//     // $cek = oci_num_rows($statement);


//     if($row > 0){
//         $_SESSION['username'] = $username;
//         $_SESSION['login'] = true;
//         header("location: ..\index.php");
//     } else {
//         header("location: ..\login.php?pesan=gagal");
//     }
//     }
//      else{
//     die("Akses dilarang....");
// }
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to retrieve hashed password for the given username
    $statement = $conn->prepare("SELECT password FROM logadmin WHERE username = ?");
    $statement->bind_param("s", $username);
    $statement->execute();
    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        // Username found, verify the password
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set session variables and redirect
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true;
            header("location: ../home.php");
        } else {
            // Password is incorrect
            header("location: ../index.php?pesan=gagal");
        }
    } else {
        // Username not found
        header("location: ../index.php?pesan=gagal");
    }
} else {
    die("Akses dilarang....");
} 
?>