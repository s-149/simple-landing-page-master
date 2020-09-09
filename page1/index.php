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
    <!-- start header -->
    <div class="container boxheader">
      <div class="header">
				<?php 
					$pilih='pageA1'; 
					include 'var_db.php'; 
				?><br>	  
	      <h1 class="title mt-5"><?= $Objek ?></h1>		
		  
				<?php 
					$pilih='pageA2'; 
					include 'var_db.php'; 
				?><br>        		
        	<h3 class="subtitle mt-5"><?= $Objek ?></h3>		
      </div>
    </div>
    <!-- end header -->
    <!-- image header -->
    <div>
      <div class="image-clip-top">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1000 100"
          preserveAspectRatio="none"
        >
          <path
            fill="#ffffff"
            d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"
          ></path>
        </svg>
      </div>

      <div class="image-hearder">
        <div class="box">
          		<?php 
					$pilih='pageA3'; 
					include 'var_db.php'; 
				?><br>
				<img src="./../assets/img/update/<?= $Objek ?>" />
        </div>
      </div>
      <div class="image-clip-bottom">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1000 100"
          preserveAspectRatio="none"
        >
          <path
            fill="#ffffff"
            d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"
          ></path>
        </svg>
      </div>
    </div>
    <!-- image header -->
    <!-- benefit -->
    <div class="container">
      <div class="justify-content-center row box-benefit-title">
				<?php 
					$pilih='pageA4'; 
					include 'var_db.php'; 
				?><br>
        <h2 class="title-benefit"><?= $Objek ?></h2>
      </div>
      <div class="row">
				<?php 
					$pilih='pageA7'; 
					include 'var_db.php'; 
				?><br>
				 <?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>		  
        <div class="col-md-6 mb-5">
          <div class="box-benefit-item">
            <div>
              <span class="box-icon">
                <i class="fas fa-check"></i>
              </span>
            </div>
            <div class="box-content">
              <h6 class="benefit-name"><?= $data ['Objek'] ?> </h6>
			  <p class="benefit-desk"><?= $data ['alt']?></p>
			  
		  	</div>
          </div>
        </div>
		<?php } ?>
         	
      </div>
    </div>

    <!-- benefit -->
    <!-- description -->
    <div class="description-top">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1000 100"
        preserveAspectRatio="none"
      >
        <path
          fill="#ffffff"
          d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"
        ></path>
      </svg>
    </div>
    <div class="wrepper-description">
      <div class="box-text">
				<?php 
					$pilih='pageA8'; 
					include 'var_db.php'; 
				?><br>
        <p><?= $Objek ?></p>
		
				<?php 
					$pilih='pageA9'; 
					include 'var_db.php'; 
				?><br>
        <p><?= $Objek ?></p>
		 	
	  </div>
      <div class="box-img">
          		<?php 
					$pilih='pageA10'; 
					include 'var_db.php'; 
				?><br>
				<img src="./../assets/img/update/<?= $Objek ?>" />
		
      </div>
    </div>
    <!-- description -->
    <!-- about product -->
    <div class="wrepper-about-product">
				<?php 
					$pilih='pageA11'; 
					include 'var_db.php'; 
				?><br>
      <h2><?= $Objek ?></h2>

      <div class="box-line"><span class="line"></span></div>
      <div class="row">
        <div class="col-md-6 d-flex justify-content-end">
          <div>
          		<?php 
					$pilih='pageA12'; 
					include 'var_db.php'; 
				?><br>
				<img src="./../assets/img/update/<?= $Objek ?>" />	   
          </div>
        </div>
        <div class="box-about-detail col-md-6">
				<?php 
					$pilih='pageA13'; 
					include 'var_db.php'; 
				?><br>
				<?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>
          <div class="about">
            <i class="fas fa-check-circle"></i>
            <p><?= $data ['Objek'] ?></p>
          </div>
		  <?php } ?>
      </div>
    </div>
	</div>
    <!-- about product -->
    <!-- order -->
    <div class="container-fluid wrepper-order">
      <div class="row">
        <div class="col-12 mt-5">
          <div class="row">
            <div class="col-sm-12">
              <a href="http://">
                <img
                  src="./../assets/img/tombol-wa-kotak.gif"
                  alt="order penumbuh rambut"
                  class="btn-gif-order mx-auto d-block"
                />
              </a>
			  
            </div>
          </div>
        </div>
        <div class="col-12 mt-5">
				<?php 
					$pilih='pageA14'; 
					include 'var_db.php'; 
				?><br>
          <p class="text-center order-desc"><?= $Objek ?></p>

        </div>
        <div class="col-12 mt-2 mb-5 text-center">
				<?php 
					$pilih='pageA15'; 
					include 'var_db.php'; 
				?><br>
          <strong class="order-desc"><b><?= $Objek ?></b></strong>
          	
        </div>
      </div>
    </div>
    <!-- order -->
    <!-- paket -->
    <div class="container-fluid paket py-5">
				<?php 
					$pilih='pageA16'; 
					include 'var_db.php'; 
				?><br>
      <h2 class="text-center my-5"><?= $Objek ?></h2>

      <div class="row justify-content-center">
          		<?php 
					$pilih='pageA17'; 
					include 'var_db.php'; 
				?><br>
				<?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { ?>
        <div class="col-md-6 col-sm-12 d-flex justify-content-end mb-3">
		<img src="./../assets/img/update/<?= $data ['Objek'] ?>" alt="<?= $data ['alt'] ?>" class="pengeriman" />
        </div>
		<?php } ?>
      </div>
    </div>
    <!-- paket -->
    <!-- product price -->
    <div class="container-fluid py-5">
      <div class="row">
          		<?php 
					$pilih='pageA18'; 
					include 'var_db.php'; 
				?><br>    	  
        <div class="col-12">
          <a href="http://">
		<img src="./../assets/img/update/<?= $Objek ?>" alt="<?= $alt ?>" class="mx-auto d-block img-new-price" />
       </a>
		
        </div>
      </div>
    </div>
    <!-- product price -->
    <!-- consultation -->
    <div class="container-fluid wrepper-order py-5">
				<?php 
					$pilih='pageA19'; 
					include 'var_db.php'; 
				?><br>
      <h2 class="text-center consultation-text"><?= $Objek ?> </h2>
          	
      <div class="row">
        <div class="col-12 mt-5">
          <div class="row">
            <div class="col-sm-12">
              <a href="http://">
                <img
                  src="./../assets/img/tombol-wa-kotak.gif"
                  alt="order penumbuh rambut"
                  class="btn-gif-order mx-auto d-block"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- consultation -->
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
