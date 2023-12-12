<?php
//koneksi
include "proses/config.php";
//mengecek jika user sudah pernah login
if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
  header("location: index.php");
  exit();
}
//Set Alert Message based on Query Parameter
$pesan = NULL;
if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal"){
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetss/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetss/css/form-elements.css">
    <link rel="stylesheet" href="assetss/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assetss/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assetss/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assetss/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assetss/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assetss/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg" style="background-color: #717a83 ;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong> Registration Page</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-bottom">
                            <div class="form-top-left">
                                <h3>Register an account</h3>
                                <p style="color: secondary;">Enter your desired username and password:</p>
                            </div>
                            <form role="form" name="Regis" method="POST" action="proses/regis_proses.php">
                                <?php echo $pesan; ?>
                                <div class="form-group">
                                    <label class="sr-only" for="username">Username</label>
                                    <input type="text" name="username" placeholder="Username..." class="username form-control" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Email">Email</label>
                                    <input type="text" name="Email" placeholder="Email..." class="username form-control" id="Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="password form-control" id="password" required>
                                </div>
                                <button type="submit" class="btn" value="Regis" style="background-color: #475258 ;">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="assetss/js/jquery-1.11.1.min.js"></script>
    <script src="assetss/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetss/js/scripts.js"></script>

</body>

</html>
