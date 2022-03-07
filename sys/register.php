<?php

	$dbc = new PDO('mysql:host=localhost; dbname=socmed','root','');


	if($_POST["level"] == "1"){
		// member
		$statement = $dbc->prepare("INSERT INTO member (ID_MEMBER, NIM_MEMBER, NAMA_MEMBER, EMAIL_MEMBER, PASSWORD_MEMBER, ALAMAT_MEMBER, NO_TELEPON_MEMBER, JENIS_KELAMIN_MEMBER, FOTO_MEMBER) VALUES (NULL, :nim, :nama, :email, (SHA2(:password, 0)), :alamat, :no_telp, :jenis_kelamin, :foto)");
		$statement->bindValue(':nim', $_POST['nim']);
		$statement->bindValue(':nama', $_POST['nama']);
		$statement->bindValue(':email', $_POST['email']);
		$statement->bindValue(':password', $_POST['password']);
		$statement->bindValue(':alamat', $_POST['alamat']);
		$statement->bindValue(':no_telp', $_POST['noWa']);
		$statement->bindValue(':jenis_kelamin', $_POST['jenis_kelamin']);
		$statement->bindValue(':foto', 'user.png');
		if($statement->execute()){
			echo "<script>
					alert('Registrasi Berhasil');
					window.location = 'login.php';
				</script>";
		}
	}else{
		$statement = $dbc->prepare("INSERT INTO admin (ID_ADMIN, NIM_ADMIN, NAMA_ADMIN, EMAIL_ADMIN, PASSWORD_ADMIN, ALAMAT_aDMIN, NO_TELEPON_ADMIN, JENIS_KELAMIN_ADMIN, FOTO_ADMIN) VALUES (NULL, :nim, :nama, :email, (SHA2(:password, 0)), :alamat, :no_telp, :jenis_kelamin, :foto)");
		$statement->bindValue(':nim', $_POST['nim']);
		$statement->bindValue(':nama', $_POST['nama']);
		$statement->bindValue(':email', $_POST['email']);
		$statement->bindValue(':password', $_POST['password']);
		$statement->bindValue(':alamat', $_POST['alamat']);
		$statement->bindValue(':no_telp', $_POST['noWa']);
		$statement->bindValue(':jenis_kelamin', $_POST['jenis_kelamin']);
		$statement->bindValue(':foto', 'user.png');
		if($statement->execute()){
			echo "<script>
					alert('Registrasi Berhasil');
					window.location = 'login.php';
				</script>";
		}
	}

	
?>