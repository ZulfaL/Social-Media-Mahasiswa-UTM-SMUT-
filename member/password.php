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
		$benar = 0;
		
		if($_POST){
			include 'validasi.php';
			if(validasiEmail($errors,$_POST,'email')){
				$email = $_POST['email'];
				$benar++;
			}
			if(validasiPass($errors,$_POST,'password')){
				$password = $_POST['password'];
				$benar++;
			}
			if ($benar == 2){
			echo "<script>
					alert('Registrasi Berhasil');
					window.location = 'home.php';
				</script>";
		}
		}
	?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Ganti Password</span></div>
        <form action="profile.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" name="email" value="<?= $email ?>">
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

          <h3>Password Baru</h3>

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
		  
          <div class="row button">
            <input type="submit" value="Ganti" name="login">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
