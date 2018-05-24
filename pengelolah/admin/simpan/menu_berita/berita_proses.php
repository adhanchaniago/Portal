<?php
include '../conn/koneksi.php';
 $tanggal = date('Y-m-d');
 $jam = date('H:i:s');
 $Waktu = $tanggal.' '.$jam;
 

$folder			="menu_berita/images/";
$id_berita		= $_POST['id_berita'];
$judul_berita	= $_POST['judul_berita'];
$id_katagori	= $_POST['id_katagori'];
$isi_berita 	= $_POST['isi_berita'];

$file 			= rand(2000,200000)."-".$_FILES['file']['name'];
$file_loc 		= $_FILES['file']['tmp_name'];
move_uploaded_file($file_loc,$folder.$file);


 $input = mysql_query("INSERT into berita_gambar values('','$judul_berita','$id_katagori','$isi_berita','$file','$Waktu')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=berita_input'>";
}

?>
