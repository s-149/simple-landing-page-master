<?php  include "../assets/koneksi/koneksi.php" ; ?>
<?php  include "var.php" ; ?>
		
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Montclair Grasse - Serum Rambut Atasi Rontok, Penumbuh Rambut Sehat Alami
    </title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./../assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <!-- facebook -->
    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="MONTCLAIR MEMBANTU MENGATASI KERONTOKAN"
    />
    <meta
      property="og:description"
      content="Montclair Hair Serum merupakan serum rambut hasil penelitian terbaik, kandungan terbanyak dan terbaru dari Jerman yang mengkombinasikan 5 zat penumbuh dengan 12 nutrisi dan multivitamin lainnya untuk mengatasi rambut rontok, rapuh kering, kusam dan kasar dengan menumbuhkan sel rambut baru secara cepat."
    />
    <meta property="og:image" content="./assets/img/headline_image2.png" />
  </head>
  <body id="totop">
    <div class="container">
      <!-- HEADER -->
      <div class="page2-header pb-5">
        <div class="page2-header-top pt-5">
				<?php 
					$pilih=1; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
          <h1 class="mb-3"><?= $Objek ?></h1>
				<?php 
					$pilih=2; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
          <h6 class="mb-3"><?= $Objek ?></h6>
          		<?php 
					$pilih=3; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_gambar.php'; ?><br>
				<img src="./../assets/img/update/<?= $Objek ?>" />
        </div>
				<?php 
					$pilih=4; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
        <h2 class="ml-3 mt-3"><?= $Objek ?></h2>
        <ul>
				<?php 
					$pilih='li1'; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
				 <?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>		  
          <li>
            <i class="far fa-dot-circle"></i>
            <p><?= $data ['Objek']?></p>
          </li>
		  <?php } ?>
         
        </ul>
        <div class="page2-header-bottom">
				<?php 
					$pilih=5; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
          <h2 class="red1"><?= $Objek ?></h2>
				<?php 
					$pilih=6; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
          <h2><?= $Objek ?></h2>
        </div>
      </div>
				<?php 
					$pilih=7; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
          <h2 class="page-2-title-desc"><?= $Objek ?></h2>
				<?php 
					$pilih=8; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
				 <?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>		  
         		<p><?= $data ['Objek']?></p>
		  <?php } ?>
		  
          		<?php 
					$pilih=12; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_gambar.php'; ?><br>
      <div class="page-2-img-desc">
				<img src="./../assets/img/update/<?= $Objek ?>" alt="<?= $Alt ?>" />
             </div>
				<?php 
					$pilih=13; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <p class="page-2-text-desc mt-2"><?= $Objek ?></p>
				<?php 
					$pilih=14; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <p class="page-2-text-warning-desc">
        <strong><?= $Objek ?></strong></p>
				<?php 
					$pilih=15; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <h2 class="page-2-title-desc"><?= $Objek ?></h2>
				<?php 
					$pilih=16; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <p class="page-2-text-desc"><?= $Objek ?></p>
      <ol style="font-size: 20px">
				<?php 
					$pilih='li2'; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
				 <?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>
        <li>
          <p class="page-2-text-list"><?= $data ['Objek']?></p>
        </li>
		  <?php } ?>
      </ol>
				<?php 
					$pilih=17; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <h2 class="page-2-title-desc"><?= $Objek ?></h2>
				<?php 
					$pilih=18; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <p class="page-2-text-desc"><?= $Objek ?></p>
				<?php 
					$pilih=19; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <p class="page-2-text-desc"><?= $Objek ?></p>
				<?php 
					$pilih=20; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <div class="page-2-img-desc">
				<img src="./../assets/img/update/<?= $Objek ?>" alt="<?= $Alt ?>" />
      </div>
				<?php 
					$pilih=21; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
				<?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>
      <p class="page-2-text-desc"><?= $data ['Objek'] ?></p>
	  <?php } ?>
				<?php 
					$pilih=24; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <h2 class="page-2-green-desc mb-4"><?= $Objek ?></h2>
				<?php 
					$pilih=25; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
				<?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>
      <div class="page-2-box-list-green my-1">
        <i class="fas fa-check"></i>
        <p><?= $data ['Objek'] ?></p>
      </div>
	  <?php } ?>
				<?php 
					$pilih=26; 
					include 'var_db.php'; 
				?><br>
				<?php include 'form_text.php'; ?><br>
      <h2 class="page-2-green-desc my-3"><?= $Objek ?></h2>
    </div>
    <!-- btn to top -->
    <a href="#totop" id="btntotop"><i class="fas fa-angle-up"></i></a>
    <!-- btn to top -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="./../assets/js/main.js"></script>
  </body>
</html>
