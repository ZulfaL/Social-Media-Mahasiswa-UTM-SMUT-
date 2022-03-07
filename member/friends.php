<?php

// include file functions
require 'function/functions.php';

// query data dari tabel postingan
$user = query("SELECT * FROM member");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $user = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Tab -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <!-- Link Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- File css -->
    <link rel="stylesheet" href="style.css">

    <!-- Title -->
    <title>SMMUT | Friends</title>

</head>

<body>

    <!-- Nav Bar -->
    <nav>

        <!-- Search Friends -->
        <div class="nav-left">
            <img src="./images/logo.png" alt="Logo">
            <input type="text" placeholder="Search SMUT..">
        </div>

        <!-- Nav right -->
        <div class="nav-right">
            <span class="profile"></span>

            <a href="#">
                <i class="fa fa-bell"></i>
            </a>

            <a href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </nav>


    <!-- Container -->
    <div class="container">

        <!-- Control Panel Right -->
        <div class="right-panel">

            <!-- Friends Section -->
            <div class="friends-section">
                <h4>Friends</h4>
                <?php foreach( $user as $row ) : ?>
                <a class='friend' href="detail-teman.php">
                    <div class="dp">
                        <img src="images/<?= $row["FOTO_MEMBER"]; ?>" alt="">
                    </div>
                    <p class="name"><?= $row["NAMA_MEMBER"]; ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>