<?php include"../assets/koneksi/koneksi.php"; 

if(isset($_POST['tambah'])){

$UserName=$_POST['user'];
$Password=$_POST['pass'];
$Level=$_POST['level'];

$sql="INSERT INTO `login`(`UserName`,`Password`, `Level`) VALUES ('$UserName','$Password','$Level')";
 $query=mysqli_query($koneksi,$sql);

 if ($query){

		 echo "<script>alert('Proses Berhasil Dijalankan'); window:location='login.php' </script>";
            }
  	else {

  		echo "<script>alert('Upzz, Terjadi masalah silahkan ulangi kembali'); window:location='register.php' </script>";

	  	}
}

?>

<!-- 
enctype..
digunakan ketika hendak mengupload sebuah file,gambar, dll.
gunakan form pembuka dan input dibawah
<form action="proses.php" method="post" enctype="multipart/form-data">
<input type="file" class="form-control" name="file"  required autofocus  />
-->

<form action="" method="post">
	<input type="text" name="user" class="form-control" placeholder="USER NAME " required autofocus /><br>
	<input type="password" name="pass" class="form-control" placeholder="PASSWORD " required autofocus /><br>
	<input type="text" hidden="true" name="level" class="form-control" value="ADMIN" /><br>
	<button type="submit" name="tambah">MENDAFTAR</button>
</form>

<a href="login.php">Sudah Punya Akun.???</a>
