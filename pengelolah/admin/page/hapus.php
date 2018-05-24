<?php include 'koneksi/koneksi.php'; ?>
<?php 

		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'hapus') {
				$id_berita = $_GET['id_berita'];
				$delete = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id_berita'");
				if ($delete) {
					echo '<div class="success">Hapus Berita berhasil</div>';
				}else{
					echo '<div class="error">Berita gagal dihapus</div>';
				}
			}
		}

		?>