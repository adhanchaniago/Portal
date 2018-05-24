<div class="container fluid">
	<h1 align="center">Halaman Edit Berita</h1>
	<a href="index.php?page=berita" class="btn btn-sm btn-warning"> << Kembali ke user management </a>
		<?php
		if (isset($_POST['edit_berita'])) {
			$id_berita = $_POST['id_berita'];
			$id_katagori = $_POST['katagori'];
			$judul = ($_POST['judul']);
			$headline = $_POST['headline'];
			$isi = $_POST['isi'];
			$penulis = $_POST['penulis'];
			$gambar_name = $_FILES['gambar']['name'];

			if(empty($judul) || empty($headline) || empty($isi) || empty($penulis)){
				echo '<div class="warning">Data tidak boleh kosong</div>';
			}else{
				$edit= mysqli_query($koneksi,"UPDATE berita SET id_katagori=$id_katagori,judul='$judul',headline='$headline',isi='$isi',penulis='$penulis',gambar='$gambar_name' WHERE id_berita='$id_berita'");
				if($edit){
					move_uploaded_file($_FILES['gambar']['tmp_name'], "gbr/".$_FILES ['gambar']['name']);
					echo '<div class="success">Berita berhasil disimpan</div>';
				}else{
					echo '<div class=error">Berita gagal edit</div>';
				}
			}
		}
		$id_berita = $_GET['id'];
		$sql = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita='$id_berita'");
		$result = mysqli_fetch_array($sql);
		?>
        <div class="col-lg-6">
        	<form method="post" action="" enctype="multipart/form-data">
        			<input type="hidden" name="id_berita" class="input" value="<?php echo $result['id_berita'];?>">
            	<label>Judul</label>
            		<input type="text" name="judul" placeholder="Judul" class="form-control" value="<?php echo $result['judul'];?>">
            	<label> kategori </label>
            		<select name="katagori" class="form-control">
            			<?php
						$sql = mysqli_query($koneksi,"SELECT * FROM sub_katagori ORDER BY id_katagori ASC");
						while($result=mysqli_fetch_array($sql)) {
						echo '<option value='.$result['id_katagori'].'>'.$result['nm_katagori'].'</option>';}
						?>
            		</select>
            	<label>Headline</label>
            		<textarea name="headline" placeholder="headline" class="form-control"><?php echo $result['headline'];?></textarea><br />
            	<label> Isi Berita</label>
             		<textarea name="isi" placeholder="Isi Berita" class="form-control"><?php echo $result['isi'];?></textarea><br />
             	<label> Penulis</label>
             		<input type ="text" name="penulis" placeholder="Penulis" class="form-control" value="<?php echo $result['penulis'];?>">
             	<label> Gambar</label>
             		<input type ="file" name="gambar" class="form-control">
              		<input type ="submit" name="edit_berita" value="Edit Berita" class="submit"> 
             </form>
          </div>
         </div>