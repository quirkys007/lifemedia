<?php
require("config.php");


    // Get data from POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO komen (nama, email, komen) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $comment);
    if ($stmt->execute()) {
        // Redirect to avoid resubmission
        header("Location: ../index.php #comment");
        exit();
    } else {
        echo "<script>
                                    alert('data gagal di tambah');
                                    document.location.href = '../index.php #comment';
                                    </script>";
    }

    // Close connections
    $stmt->close();
    $conn->close();

    // // Respond to the user (you can customize this part)
    // echo "Comment stored successfully!";
}
?>
