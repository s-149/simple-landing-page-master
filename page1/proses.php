<?php

//*************************************************************************//
// Koneksi.. 
// Berfungsi Sebagai Jembatan Penghubung Antara Program Dengan Database.
// Berguna Sebagai Alat untuk CRUD pada sebuah Program.

include"../assets/koneksi/koneksi.php";

//*************************************************************************//


// ************************************************************* //

/**copas kode disamping dan isi nama variabel beserta nama sesuai paket data $=$_POST[''];  */
/**kode utama, sengaja tidak ditampilkan */

/**kode eksekutor */

//******************//
// Nama Table

$Table="update";

//******************//

//******************//
// Field yang akan diinput

$Field=" `Objek`,`alt`, `Filter` ";


//******************//

//******************//
// Field yang akan diupdate

$Field1=array('IdUpdate','Objek','alt','Filter');

//******************//

//******************//
// Jika Variabel Bersifat Global atau dapat diakses untuk semua proses 
// Boleh lah Tulis dibawah sini.
// Dan jika Variabel Bersifat Privat Maka Baiknya ditulis di masing-masing 
// proses agar Variabel tersebut tidak mengganggu pemandangan :) 

// Contoh nya seperti ini...
// $Isi2=$_POST['Isi2'];


//******************//




// ************************************************************* //


// ************************************************************* //

// Move Upload..
// Digunakan jika akan mengupload sebuah file,gambar,dll.
// gunakan Script dibawah pada proses upload data.

// $keterangan=$_FILES['file']['name'];
// $source=$_FILES['file']['tmp_name'];
// $folder='../gambar/';
                        
// move_uploaded_file($source,$folder.$keterangan);

// ************************************************************* //


// ************************************************************* //

// Perintah Sql Untuk CRUD Dasar...

// 1. INSERT...
// Dijalankan ketika hendak menambah data.
// Penulisan ....
// INSERT INTO `Nama Table`(`Field`) VALUES ('Isi')
// Gunakan Script Kerangka Dibawah 
// $sql="INSERT INTO ``(``, ``) VALUES ('$','$') ";
// $query=mysqli_query($koneksi,$sql);

// 2. UPDATE...
// Dijalankan ketika hendak merubah data.
// Penulisan ....
// UPDATE `Nama Table` SET `Field`='Isi' WHERE `Nama Table`.`Field(primary key)`='(primary key)'
// Gunakan Script Kerangka Dibawah 
// $sql="UPDATE `` SET ``='' WHERE ``.``='' ";
// $query=mysqli_query($koneksi,$sql);

// 3. DELETE...
// Dijalankan ketika hendak menghapus data.
// Penulisan ....
// DELETE FROM `Nama Table` WHERE `Nama Table`.`Field(primary key)`='(primary key)'
// Gunakan Script Kerangka Dibawah 
// $sql="DELETE FROM `` WHERE ``.``='' ";
// $query=mysqli_query($koneksi,$sql);

// ************************************************************* //


// ************************************************************* //

// Perintah Sql untuk Mengelola Database...

// 1. SELECT...
// Dijalankan ketika hendak menampilkan data.
// Penulisan ....
// SELECT * FROM `Nama Table`
// Gunakan Script Kerangka Dibawah 
// $sql="SELECT * FROM `` ";
// $query=mysqli_query($koneksi,$sql);


// ************************************************************* //


// ************************************************************* //

// Struktur Table...


// Menambah Data Text..

if(isset($_POST['tambahtext'])){

$Text=$_POST['Text'];
$Filter=$_POST['Filter'];

$PaketText="'$Text','','$Filter'";

 $sql="INSERT INTO `$Table` ($Field) VALUES ($PaketText)";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

// Menambah Data Gambar..

if(isset($_POST['tambahgambar'])){

$Gambar=$_FILES['file']['name'];
$Alt=$_POST['alt'];
$Filter=$_POST['Filter'];

$PaketGambar="'$Gambar','$Alt','$Filter'";

// ************************************************************* //

/**copas kode disamping dan isi nama variabel beserta nama sesuai paket data $=$_POST[''];  */
/**kode utama, sengaja tidak ditampilkan */

/**kode eksekutor */

 $source=$_FILES['file']['tmp_name'];
 $folder='../assets/img/update/';

 move_uploaded_file($source,$folder.$Gambar);

$sql="INSERT INTO `$Table`($Field) VALUES ($PaketGambar)";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

// Menambah Data Text..

if(isset($_POST['tambahtextdua'])){

$Text=$_POST['Text'];
$Alt=$_POST['alt'];
$Filter=$_POST['Filter'];

$PaketTextDua="'$Text','$Alt','$Filter'";

 $sql="INSERT INTO `$Table` ($Field) VALUES ($PaketTextDua)";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

// Rubah Data..
 if(isset($_POST['rubah'])){
$Kode=$_POST['kode'];
$Text=$_POST['Text'];
$Alt=$_POST['alt'];
$Filter=$_POST['Filter'];

 $sql="UPDATE `$Table` SET `$Field1[1]`='$Text',`$Field1[2]`='$Alt',`$Field1[3]`='$Filter'
 WHERE `$Table`.`$Field1[0]`='$Kode'";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

// Hapus Data..
 if(isset($_POST['hapus'])){
 
 $Kode=$_POST['kode'];
 
 $sql="DELETE FROM `$Table` WHERE  `$Table`.`$Field1[0]`='$Kode'";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

// Format Data..
 if(isset($_POST['format'])){
 /**kode sql untuk memformat isi tabel, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 $sql="TRUNCATE `$database`.`$Table`";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

 // Hapus Tabel..
 if(isset($_POST['hapustable'])){
 /**kode sql untuk menghapus tabel, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 $sql="DROP TABLE `$Table` ";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }

  // Hapus Database..
 if(isset($_POST['hapusdatabase'])){
 /**kode sql untuk menghapus database, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 $sql="DROP DATABASE `$database` ";
 $query=mysqli_query($koneksi,$sql);

 	include "logika.php";
    }
?>

		        	
                       