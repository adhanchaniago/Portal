<?php
include '../conn/koneksi.php';
$tanggal = date('Y-m-d');
$jam = date('H:i:s');
$Waktu = $tanggal.'-'.$jam;
 
 
$folder			="menu_berita/images/";
$id_berita		= $_POST['id_berita'];
$judul_berita	= $_POST['judul_berita'];
$katagori 		= $_POST['katagori'];
$isi_berita 	= $_POST['isi_berita'];

$file 			= rand(2000,200000)."-".$_FILES['file']['name'];
$file_loc 		= $_FILES['file']['tmp_name'];
move_uploaded_file($file_loc,$folder.$file);


 $input = mysql_query("UPDATE berita_gambar SET judul_berita  	='$judul_berita',
													katagori	='$katagori',
													isi_berita	='$isi_berita',
													file		='$file',
													waktu		='$Waktu'
													WHERE id_berita='$id_berita'");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=berita_input'>";
}

?>
