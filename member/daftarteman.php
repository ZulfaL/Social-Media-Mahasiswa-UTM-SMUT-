<?php include("../sys/connect.php"); ?>
<html>
<head>
      <title>Daftar teman Pertemanan</title>
</head>
<body>
      <ul id="member">
      <div class="user-title">Daftar Seluruh Teman</div>
      <?php 
      $query_user = mysql_query("SELECT * FROM user where uid!='1'");
      while($row=mysql_fetch_array($query_user)) {
                  $uid=$row['uid'];
                  $foto= "gambar/$row[foto]";
                  //Tampilkan List seluruh user kecuali user 1
      ?>   
                  <li id="list<?php echo $row['uid']; ?>"> <img src="<?php echo $foto; ?> " />
                  <a href="#" class="user-title"><?php echo $row['nama'];?> </a>
                  <?php 
                  $sql_cek_teman = mysql_query("SELECT * FROM user WHERE uid='1' LIMIT 1"); 
                  while($row=mysql_fetch_array($sql_cek_teman)) { 
                  $arrayTeman = $row["array_teman"];
                  }
                  // Cek Seluruh User Apakah sudah menjadi teman dari user 1 
                  $array_teman = explode(",", $arrayTeman); //pecah array user 1
                  if (in_array($uid, $array_teman)) { //jika user sudah ada dalam array zuser 
                  ?>
                  <span class="add">
                  <div class="user-title">Sudah menjadi teman Anda</div>
                  </span>
                  </li>
                  <?php 
                  }
                  else{//jika user belum ada dalam array user 1 
                  ?>
                  <!--Form untuk penyimpanan array teman user 1 
                  proses simpan array dieksekusi oleh file "simpan_teman.php"-->
                  <span class="add">
                  <form name="tambahteman" method="post" action="simpan_teman.php">
                  <input type="submit" class="greenButton" value="Tambah Teman" name="tambah_teman" />
                  <input type="hidden" name="id_teman" value="<?php echo $uid; ?>">
                  </form>
                  </span>
                  </li>
                  <?php
                  }
      }       
      ?>
      </ul>

      <?php
      //tambah teman
      include "koneksi.php";
      $uid_teman=$_POST['id_teman'];
      //query user 1
      $sql_cek_teman = mysql_query("SELECT * FROM user WHERE uid='1' LIMIT 1"); 
      while($row=mysql_fetch_array($sql_cek_teman)) { $arrayTeman = $row["array_teman"];}
      $array_teman = explode(",", $arrayTeman); //pecah array user
      //jika array tidak kosong maka array yang disimpan adalah array lama ditambah $uid_teman (nilai $uid_teman dikirimkan dari form di list_teman.php)
      //jika array kosong atau belum ada teman maka yang disimpan hanya $uid_teman (nilai $uid_teman dikirimkan dari form di list_teman.php)
      if ($arrayTeman != "") { 
        $arrayTeman = "$arrayTeman,$uid_teman"; 
      } 
      else { 
        $arrayTeman = "$uid_teman"; 
      }
      //simpan perubahan array
      $UpdateArrayTeman = mysql_query("UPDATE user SET array_teman='$arrayTeman' WHERE uid='1'");
       
      ?><script language="javascript">
                  alert("Tambah Teman Berhasil");
                  document.location="index.php";
                  </script><?php 
       
      ?>


      <?php
      //hapus teman
      include  "koneksi.php";
      $uid_teman=$_POST['id_teman'];
      // Query user 1
      $sql_cek_teman = mysql_query("SELECT * FROM user WHERE uid='1' LIMIT 1"); 
      while($row=mysql_fetch_array($sql_cek_teman)) { 
        $arrayTeman = $row["array_teman"];
      }
      $array_teman = explode(",", $arrayTeman); //pecah array user
       
      //bagian ini untuk menghapus array dengan fungsi unset pada key nilai yang di explode
      foreach ($array_teman as $key => $value) {
        if ($value == $uid_teman) {
            unset($array_teman[$key]);
        } 
      }
       
      //Sekarang fungsi implode digunakan untuk menyatukan string kembali sebelum dimasukkan kedalam database
      $array_teman_baru = implode(",", $array_teman);
       
      //simpan perubahan array
      $UpdateArrayTeman = mysql_query("UPDATE user SET array_teman='$array_teman_baru' WHERE uid='1'");
      ?>
       
      <script language="javascript">
                  alert("Pertemanan sudah dihapus");
                  document.location="index.php";
      </script>
</body>
</html>