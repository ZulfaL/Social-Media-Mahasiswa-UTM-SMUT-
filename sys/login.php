<?php

	$dbc = new PDO('mysql:host=localhost; dbname=socmed','root','');

	if($_POST["level"] == "1"){
		// member
		$statement = $dbc->prepare("SELECT count(*) FROM user WHERE EMAIL_MEMBER = :email and PASSWORD_MEMBER = (SHA2(:password, 0))");
		$statement->bindValue(':email', $_POST['email']);
		$statement->bindValue(':password', $_POST['password']);
		$statement->execute();
		$num_row = $statement->fetchColumn();
		if($num_row == 0){
			echo "<script>
					alert('Login Berhasil');
					window.location = 'member/index.php';
				</script>";
		}else{
			echo "<script>
					alert('Username atau password salah!');
					window.location = 'login.php';
				</script>";
		}
		

	}else{
		$statement = $dbc->prepare("SELECT count(*) FROM admin WHERE EMAIL_ADMIN = :email and PASSWORD_ADMIN = (SHA2(:password, 0))");
		$statement->bindValue(':email', $_POST['email']);
		$statement->bindValue(':password', $_POST['password']);
		$statement->execute();
		$num_row = $statement->fetchColumn();
		if($num_row == 0){
			echo "<script>
					alert('Login Berhasil');
					window.location = 'admin/home.php';
				</script>";
		}else{
			echo "<script>
					alert('Username atau password salah!');
					window.location = 'login.php';
				</script>";
		}
	}

	
?>