	  <!--********************************************************-->
	  <?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
 				$Objek=0;
				$Alt=0;
			while($data=mysqli_fetch_array($query)) { 
				$Objek=$data ['Objek'];
				$Alt=$data ['alt'];
				}
		?>	
		 
	  <!--********************************************************-->
