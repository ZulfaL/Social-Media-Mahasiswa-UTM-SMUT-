<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | SMMUT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
	<?php
		$email = '';
		$password = '';
		$level = '';
		$benar = 0;
		
		if($_POST){
			include 'sys/validasi.php';
			if(validasiEmail($errors,$_POST,'email')){
				$nim = $_POST['email'];
				$benar++;
			}
			if(validasiPass($errors,$_POST,'password')){
				$password = $_POST['password'];
				$benar++;
			}
			if (validasiLogin($errors,$_POST,'level')){
				$level = $_POST['level'];
				$benar++ ;
			}
			if ($benar == 3){
				include("sys/login.php");
			}
		}
	?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="login.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" value="<?= $email ?>">
			<div class="error"><?php
				if(isset($errors['email'])){ 
					echo $errors['email'];
				}
			?>
			</div>
		  </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="<?= $password ?>">
			<div class="error"><?php
				if(isset($errors['password'])){ 
					echo $errors['password'];
				}
			?>
			</div>
		  </div>
		  
		  <div class="row">
		  	<i class="fas fa-user"></i>
            <select name="level">
				<option value="0">Login Sebagai ---</option>
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
		  
          <div class="pass"><a href="#">Lupa password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" name="login">
          </div>
          <div class="row signup-link">Belum daftar? <a href="register.php">Daftar sekarang</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
