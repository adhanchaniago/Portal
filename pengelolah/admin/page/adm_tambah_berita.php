<div class="container-fluid">
	<h2 align="center">Halaman Edit Berita</h2>
    <a href="index.php?page=berita" class="btn btn-sm btn-warning"> << kembali ke kategori management </a>
    	<?php
    	$tanggal = date('Y-m-d');
		 $jam = date('H:i:s');
		 $Waktu = $tanggal.' '.$jam;
		if(isset($_POST['submit_berita'])){
			$judul = $_POST['judul'];
			$katagori = $_POST['katagori'];
			$headline = $_POST['headline'];
			$isi = $_POST['isi'];
			$penulis = $_POST['penulis'];
			$gambar_name = $_FILES['gambar']['name'];
			
			if(empty($judul) || empty($headline) || empty($isi) || empty($penulis)){
				echo '<div class="warning">Data tidak boleh kosong</div>';
			}else{
				$insert = mysqli_query($koneksi,"INSERT INTO berita(id_katagori,judul,headline,isi,penulis,gambar)
					VALUES('$katagori','$judul','$headline','$isi','$penulis','$gambar_name')");
				if($insert){
					move_uploaded_file($_FILES['gambar']['tmp_name'], "gbr/".$_FILES ['gambar']['name']);
					echo '<div class="success">Berita berhasil disimpan</div>';
				}else{
					echo '<div class=error">Berita gagal disimpan</div>';
				}
			}
		}
		?>
        <div class="panel-heading">
        	<form method="post" action="" enctype="multipart/form-data">
            	<label>Judul</label>
            		<input type="text" name="judul" placeholder="Judul" class="form-control"><br/>
            	<label> kategori </label>
            		<select name="katagori" class="form-control">
            			<?php
						$sql = mysqli_query($koneksi,"SELECT * FROM sub_katagori ORDER BY id_katagori ASC");
						while($result=mysqli_fetch_array($sql)) {
						echo '<option value='.$result['id_katagori'].'>'.$result['nm_katagori'].'</option>';}
						?>
            		</select>
            	<label>Headline</label>
            		<textarea name="headline" placeholder="headline" class="form-control"> </textarea><br />
            	<label> Isi Berita</label>
             		<textarea name="isi" placeholder="Isi Berita" class="form-control"> </textarea><br />
             	<label> Penulis</label>
             		<input type ="text" name="penulis" placeholder="Penulis" class="form-control">
             	<label> Gambar</label>
             		<input type ="file" name="gambar" class="form-control">
              		<input type ="submit" name="submit_berita" value="Tambah Berita" class="submit"> 
             </form>
          </div>
         </div>
             
            
					