<?php
	if(isset($_POST['edit_user'])){
			$nama = $_POST['nama'];
			$deskripsi = ($_POST['deskripsi']);
			if(empty($nama)){
				echo '<div class="warning">Data tidak boleh kosong</div>';
			}else{
				$edit = mysqli_query($koneksi, "UPDATE sub_katagori SET deskerpsi='$deskerpsi' WHERE nm_ketegori='$nama'");
				}
				if($edit){
					echo'<div class="success">kategori berhasil diedit</div>';
				}else{
					echo '<div class="error">kategori gagal diedit</div>';
				}
			}
		
		$nm_kategori = $_GET['id_katagori'];
		$sql = mysqli_query($koneksi,"SELECT * FROM sub_katagori WHERE nm_katagori = '$nm_katagori'");
		$result = mysqli_fetch_array($sql);
		?>	
			<div class="col-lg-6">
  <form method="post" action="">
    <fieldset style="border: 1px solid orange;">
      <legend>Nama Kategori</legend>
      <a href="index.php?page=katagori" class="btn btn-sm btn-warning"> << Kembali ke user management</a>
      <br/>
      <label>Nama Kategori</label>
      <input type="text" name="nama" placeholder="" class="form-control" readonly="readonly "value="<?php echo $result['nm_katagori'];?>">
      <br/>
      <label>Deskripsi Kategori</label>
      <input type="text" name="deskerpsi" placeholder="" class="form-control">
      <br/>
      <input type="submit" name="edit_user" value="Edit Kategori" class="submit">
    </fieldset>
  </form>
</div>
					