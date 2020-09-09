<?php 
//*************************************************************************//
// Jika suatu saat ingin menampilkan data yg ada didalam database
// sebaikanya yang paling penting adalah mengerti dari bahasa nya itu sendiri
// salah satu nya yaitu Sql dan Php (Perintah dan Diperintah)
// Sql Berfungsi Sebagai yg diperintah
// Php yang Memerintah
// dan Perintah Tersebut dasarnya berasal dari hasil berfikirnya manusia
// kemudian di implementasikan kepada sebuah mesin.. 
//*************************************************************************//

/**kode eksekutor */

//******************//
// Nama Table

$Table="`update`";

//******************//

//******************//
// Field yang akan di Tampilkan

$Field="'Objek'";

// Menyeleksi Field 
// Pada Tahap ini proses menampilkan data diseleksi menggunakan nama field dan isi dari field tersebut..

$Where=" `Filter` ";

//******************//

//******************//
// Form
// Id
$kode='hidden';

// Filter
$kode1='hidden';

// Alt
$kode2='hidden';

// Alt input
$kodealt='text';

// Buttun 
// Tambah
$Tambah='Tambah Baru';
$ClassTambah='btn btn-primary';

// Rubah
$Rubah='Rubah Sekarang';
$ClassRubah='btn btn-primary';

// Hapus
$Hapus='Hapus Sekarang';
$ClassHapus='btn btn-secondary';

//******************//

//******************//

// Jumlah isi field yg akan digunakan untuk menyeleksi data..
// jika ada masalah ditahap ini silahkan hubungi saya
// dan saya akan jelaskan lebih detail...

// $n=2;

//******************//

//*************************************************************************//
// Perintah
// berfungsi sebagai perintah untuk menampilkan data dalam database

// $sql="select * from `conten` ";

//*************************************************************************//

//*************************************************************************//
// Serah Terima
// Berfungsi sebagai mediator untuk membolehkan sistem berinteraksi dengan database

// $query=mysqli_query($koneksi,$sql);

//*************************************************************************//

//*************************************************************************//
// Variabel Awal
// Berfungsi Sebagai Ruang yang siap untuk di isi dan jika tidak di isi maka akan bernilai 0
// dan sistem anda tidak akan terdeteksi error saat Variabel tidak terisi
// $=0;

// $Objek=0;

//*************************************************************************//

//*************************************************************************//
// Mengulang
// Berfungsi untuk menganalisa isi database

// while($data=mysqli_fetch_array($query)) {

//*************************************************************************//

//*************************************************************************//
// Variabel Akhir
// Berfungsi Sebagai Variabel yg dapat dipanggil kapan pun dan dimana pun
// Bertujuan agar sistem menjadi Dinamis
// $=$data [''];

// $Objek=$data ['Objek'];

//*************************************************************************//

//*************************************************************************//
// Menampilkan
// Database siap untuk ditampilkan

// for ($s=1; $s<$n; $s++)
//	{

//	}

?>
