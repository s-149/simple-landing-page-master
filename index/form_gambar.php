	  <!--********************************************************-->
	  <h3>**Tambah Baru</h3>
	  <form action="proses.php" method="post" enctype="multipart/form-data">
       		<div class="table-responsive ">
           		<table class="table">
		   			<tr>
		   				<td>
								<textarea name="Text" hidden="true" class="form-control" placeholder="Masukkan Text : " ></textarea>
								<input type="file" name="file" class="form-control" >
								<input type="text" name="alt" class="form-control" placeholder="Masukkan Alt : " >
		    					<input type="text" hidden="true" name="Filter" class="form-control"  value="<?= $pilih ?>">
								<button type="submit" name="tambahgambar" class="<?= $ClassTambah ?>"><?= $Tambah ?></button>		 					
						</td>
					</tr>
		   		</table>
		   	</div>
		   </form>
		   <h3>**Kelola</h3>
	  <?php 
			$sql="select * from $Table where $Where='$pilih' ";
 			$query=mysqli_query($koneksi,$sql);
 				$Objek=0;
			while($data=mysqli_fetch_array($query)) { 
				$Objek=$data ['Objek'];
		?>	
		<img src="./../assets/img/update/<?= $data ['Objek']?>" />
		  <form action="proses.php" method="post" enctype="multipart/form-data">
		  
       		<div class="table-responsive ">
           		<table class="table">
		   			<tr>
		   				<td>
		   						<textarea name="Text"  class="form-control" ><?= $data ['Objek']?></textarea>		    					
						</td>
					</tr>
					<tr>
		   				<td>
		    					<input type="<?= $kode1 ?>" name="Filter" class="form-control" value="<?= $data ['Filter']?>">
								<input type="<?= $kode ?>" name="kode" class="form-control" value="<?= $data ['IdUpdate']?>">
						</td>
					</tr>
					<tr>
		   				<td>
		   						<input type="<?= $kodealt ?>" name="alt" class="form-control" value="<?= $data ['alt']?>">
						</td>
					</tr>
					<tr>
		   				<td>
		   							
								<button type="submit" name="rubah" class="<?= $ClassRubah ?>"><?= $Rubah ?></button>
								<button type="submit" name="hapus" class="<?= $ClassHapus ?>"><?= $Hapus ?></button>	 					
						</td>
					</tr>
		   		</table>
		   	</div>
		   </form>                   
 		<?php } ?>
		
		<h3>**Akan Ditampilkan</h3>
	  <!--********************************************************-->
