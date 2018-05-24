
   <div class="container-fluid">
	<div class="title" style="text-align: center;"><h3>Manajemen Berita</h3></div><br/>
		<?php 

		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'hapus') {
				$id_berita = $_GET['id'];
				$delete = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id_berita'");
				if ($delete) {
					echo '<div class="success">Hapus Berita berhasil</div>';
				}else{
					echo '<div class="error">Berita gagal dihapus</div>';
				}
			}
		}

		?>

	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<table class="table table-striped table-advance table-hover">
					<tbody>
						<tr>
							<th><i class=""></i>NO</th>
							<th><i class=""></i>Judul</th>
							<th><i class=""></i>Berita</th>
							<th><i class=""></i>katagori</th>
							<th><i class=""></i>Gambar</th>
							<th><i class="icon_cogs"></i>Action</th>
						</tr>
						<?php
						$sql = mysqli_query($koneksi, "SELECT * FROM berita a, sub_katagori b WHERE a.id_katagori=b.id_katagori GROUP BY a.id_berita ORDER by b.id_katagori DESC");
				$no=1;
						?>
						<a href="index.php?page=adm_tambah_berita" class="btn btn-success">Tambah</a>
						<?php
						if ($sql === FALSE) {
						    die(mysql_error());
						}
						while ($result= mysqli_fetch_array($sql)) {
							
							echo '<tr><td>'.$no.'</td>
							<td>'.$result['judul'].'</td>
							<td>'.$result['isi'].'</td>
							<td>'.$result['nm_katagori'].'</td>
							<td>'.$result['gambar'].'</td>
							<td><a href="index.php?page=adm_edit_berita&id='.$result['id_berita'].'"
							class="btn btn-warning">EDIT</a>
							<a href="index.php?page=berita&action=hapus&id='.$result['id_berita'].'"
							class="btn btn-danger">Hapus</a></td></tr>';
						$no++;
						}
						  ?>
					</tbody>

					
				</table>
			</section>