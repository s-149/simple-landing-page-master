<?php
include"../assets/koneksi/koneksi.php";


if(isset($_POST['login'])){
	$UserName=$_POST['user'];
	$Password=$_POST['pass'];
	$query = mysqli_query($koneksi, "SELECT * FROM `login` WHERE `UserName`='$UserName' AND `Password`='$Password' ");
	
	if(mysqli_num_rows($query) == 0){
		echo "<script>alert('Upzzz...!!! Login Gagal'); window.location = 'login.php'</script>";
						}
	else{		
	$row = mysqli_fetch_assoc($query);
		session_start();
		if($row['Level'] == 'ADMIN' ){
			$_SESSION['user']= $UserName ;
			$_SESSION['level'] = 'ADMIN' ;
			echo "<script>alert('Login Berhasil'); window.location = 'admin.html'</script>";
							}
						
		else{
			echo "<script>alert('Upzzz......!!!! Login Gagal'); window.location = 'index.php'</script>";
			}
		}
					
}
				
?>



<form action="" method="post">
	<input type="text" name="user" class="form-control" placeholder="USER NAME " required autofocus /><br><br>
	<input type="password" name="pass" class="form-control" placeholder="PASSWORD " required autofocus  /><br><br>
	<button type="submit" name="login">MASUK</button> Atau <a href="../">Kembali</a>
</form>

<a href="register.php">Belum Punya Akun.???</a>