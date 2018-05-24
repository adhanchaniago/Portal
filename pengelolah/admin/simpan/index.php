<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pengelolahan Tempat Wisata</title>
<link rel="stylesheet" type="text/css" href="../images/style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    <img src="../images/header.jpg" />
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        <span><?=$_SESSION['nama'];?></span>
        </div>
        <div id="menu_tanggal" align="right">
        <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>
    
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu">Menu Utama
    	</div>
    	<div id="left_menu">
        	<a href="?page=home.php" class="menu">&raquo; Home </a> <br />
			<a href="#" class="menu">&raquo; MASTER </a> <br />
			<a href="?page=berita" class="menu">&raquo; Tambah Berita </a> <br />
			<a href="?page=user" class="menu">&raquo; Tambah User </a> <br />
			<a href="?page=katagori" class="menu">&raquo; Menu Katagori</a> <br />
			<a href="?page=katagori" class="menu">&raquo; Laporan</a> <br />
			<a href="?page=user" class="menu">&raquo; Menu User </a> <br />
            <a href="../logout.php" class="menu">&raquo; Logout </a> <br />
        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "../home.php";
						break;
												
						// berita
						case "berita";
						include "menu_berita/berita_data.php";
						break;
						case "berita_detil";
						include "menu_berita/berita_detil.php";
						break;
						case "berita_input";
						include "menu_berita/berita_input.php";
						break;
						case "berita_proses";
						include "menu_berita/berita_proses.php";
						break;
						case "berita_search";
						include "menu_berita/berita_search.php";
						break;
						case "berita_edit";
						include "menu_berita/berita_edit.php";
						break;
						case "berita_proses_edit";
						include "menu_berita/berita_proses_edit.php";
						break;
						case "berita_hapus";
						include "menu_berita/berita_hapus.php";
						break;
						
					
						// galery
						case "galeri";
						include "../galeri/galeri.php";
						break;
						
						// galery
						case "katagori";
						include "menu-katagori/katagori.php";
						break;
						case "katagori_pantai";
						include "menu-katagori/katagori_pantai.php";
						break;
						case "katagori_sejarah";
						include "menu-katagori/katagori_sejarah.php";
						break;
						case "katagori_wisata";
						include "menu-katagori/katagori_wisata.php";
						break;		
						
						
						// User
						case "user";
						include "menu_user/user_data.php";
						break;
						case "user_input";
						include "menu_user/user_input.php";
						break;
						case "user_proses";
						include "menu_user/user_proses.php";
						break;
						case "user_detil";
						include "menu_user/user_detil.php";
						break;
						case "user_edit";
						include "menu_user/user_edit.php";
						break;
						case "user_proses_edit";
						include "menu_user/user_proses_edit.php";
						break;
						case "user_hapus";
						include "menu_user/user_hapus.php";
						break;
					
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
  	<!-- menu Footer -->
    <div id="footer"><center>Saya &copy; 2017</center></div>
    
</div>

</body>
</html>

<?php } ?>