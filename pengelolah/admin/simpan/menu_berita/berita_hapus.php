<?php
include '../conn/koneksi.php';

$id_berita= $_GET['id_berita'];
$query = mysql_query("DELETE FROM berita_gambar WHERE id_berita='$id_berita'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";
	}


?>