<?php 
include 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nusantara Babel</title>
	<link rel="icon" type="images/png" href="#">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Nusantara Bangka Belitung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="?page=profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=contak">Contact</a>
            </li>
			
			
			<li class="nav-item">
              <a class="nav-link" href="pengelolah/admin/login.php">Login</a>
            </li>
          </ul>
        </div>
		
				
		
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
		 <div class="col-lg-3"><!--col-lg-3 -->
            <div class="card my-4">
				<h5 class="card-header bg-dark">Katagori</h5>
				
				<div class="card-body">
				
					 <a href="?page=pantai" class="list-group-item" value="" >Pantai</a>
					 <a href="?page=sejarah" class="list-group-item" value="" >Sejarah</a>
					 <a href="?page=wisata" class="list-group-item" value="" >Wisata</a>
					
				</div>
			</div>
			
			<div class="card my-4"><!-- menu Kalender-->
				<h5 class="card-header bg-dark">Kalender</h5>
				<div class="card-body" style="margin-top:-45pt;">
					<?php 
						include "include/deteksi.php";
					?>
				</div>
			</div>
			<!-- Tutup menu Kalender-->
			
         </div>
		 <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "home.php";
						break;
						
						//home
						case "home";
						include "home.php";
						break;
						
					
						//profil
						case "profil";
						include "profil.php";
						break;
						
						//about
						case "about";
						include "about.php";
						break;
						
						//galerry
						case "gallery";
						include "gallery.php";
						break;
						
						//content
						case "contak";
						include "contak.php";
						break;
						
						//berita_detail
						case "berita_detail";
						include "berita_detail.php";
						break;
						
						//pantai
						case "pantai";
						include "pantai.php";
						break;
						
						//sejarah
						case "sejarah";
						include "sejarah.php";
						break;
						
						//wisata
						case "wisata";
						include "wisata.php";
						break;
						
					}
					?>
		
			
		
		
          
        </div>
        <!-- /.col-lg-9 -->
		
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark1">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
