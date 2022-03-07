<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form | SMMUT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
	<?php 
		$nim = '';
		$nama = '';
		$alamat = '';
		$noWa = '';
		$email = '';
		$password = '';
		$level = '';
		$jenis_kelamin = '';
		$benar = 0;

		
		if($_POST){
			include "sys/validasi.php";
			if (validasiNip($errors,$_POST,'nim')){
				$nim = $_POST['nim'];
				$benar++ ;
			}
			if (validasiNama($errors,$_POST,'nama')){
				$nama = $_POST['nama'];
				$benar++ ;
			}
			if (validasiAlamat($errors,$_POST,'alamat')){
				$alamat = $_POST['alamat'];
				$benar++ ;
			}
			if (validasiNoTelp($errors,$_POST,'noWa')){
				$noWa = $_POST['noWa'];
				$benar++ ;
			}
			if (validasiEmail($errors,$_POST,'email')){
				$email = $_POST['email'];
				$benar++ ;
			}
			if (validasiPass($errors,$_POST,'password')){
				$password = $_POST['password'];
				$benar++ ;
			}
			if (validasiLogin($errors,$_POST,'level')){
				$level = $_POST['level'];
				$benar++ ;
			}
			if (validasiLogin($errors,$_POST,'jenis_kelamin')){
				$jenis_kelamin = $_POST['jenis_kelamin'];
				$benar++ ;
			}
			
		}
		if ($benar == 8){
			include("sys/register.php");
			
		}
	?>
    <div class="container register">
      <div class="wrapper">
        <div class="title"><span>Registrasi Form</span></div>
        <form action="register.php" method="post">
          <div class="row">
		  	<i class="fas fa-user"></i>
            <select name="level">
				<option value="0">Daftar Sebagai ---</option>
				<option value="1" <?php if(isset($_POST["level"])){ if($_POST["level"] == "1"){echo "selected";}} ?> >Sebagai Member</option>
				<option value="2"  <?php if(isset($_POST["level"])){ if($_POST["level"] == "2"){echo "selected";}} ?>>Sebagai Admin</option>

			</select>
			<div class="error"><?php
				if(isset($errors['level'])){ 
					echo $errors['level'];
				}
			?>
			</div>
		  </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="nim" placeholder="NIM" value="<?= $nim ?>"/>
			<div class="error"><?php
				if(isset($errors['nim'])){ 
					echo $errors['nim'];
				}
			?>
			</div>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="nama" placeholder="Nama" value="<?= $nama ?>">
			<div class="error"><?php
				if(isset($errors['nama'])){ 
					echo $errors['nama'];
				}
			?>
			</div>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" value="<?= $email ?>">
			<div class="error"><?php
				if(isset($errors['email'])){
					echo $errors['email'];
				}
			?>
			
			</div>
		  </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" value="<?= $password ?>" >
			<div class="error"><?php
				if(isset($errors['password'])){ 
					echo $errors['password'];
				}
			?>
			</div>
		  </div>
		  <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="alamat" placeholder="Alamat" value="<?= $alamat ?>">
			<div class="error"><?php
				if(isset($errors['alamat'])){ 
					echo $errors['alamat'];
				}
			?>
			</div>
          </div>
		  <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="noWa" placeholder="No Telpon" value="<?= $noWa ?>">
			<div class="error"><?php
				if(isset($errors['noWa'])){ 
					echo $errors['noWa'];
				}
			?>
			</div>
          </div>
		  <div class="row">
            <i class="fas fa-user"></i>
            <select name="jenis_kelamin">
            	<option value="0">Jenis Kelamin ---</option>
            	<option value="Laki-laki" <?php if(isset($_POST["jenis_kelamin"])){ if($_POST["jenis_kelamin"] == "Laki-laki"){echo "selected";}} ?> >Laki-laki</option>
            	<option value="Perempuan" <?php if(isset($_POST["jenis_kelamin"])){ if($_POST["jenis_kelamin"] == "Perempuan"){echo "selected";}} ?> >Perempuan</option>
            </select>
            <div class="error"><?php
				if(isset($errors['jenis_kelamin'])){ 
					echo $errors['jenis_kelamin'];
				}
			?>
			</div>
          </div>
          <div class="pass"><a href="#">Lupa password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Register">
          </div>
          <div class="row signup-link">Sudah punya akun? <a href="login.php">Login sekarang</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
