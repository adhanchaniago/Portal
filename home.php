<!--ini menu home-->
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img width="100%" class="d-block img-fluid" src="image/1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img width="100%" class="d-block img-fluid" src="image/2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img width="100%" class="d-block img-fluid" src="image/4.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		
			
		<div class="row"><!-- menu Home perulangans-->

<?php
    $id_berita  = isset($_GET['id_berita']) ? $_GET['id_berita'] : "";
  $sql_new = mysqli_query($koneksi,"SELECT * FROM berita where id_berita ORDER by id_berita='$id_berita'");
  
  while($result_new=mysqli_fetch_array($sql_new))
  {
    echo'
   
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
      <a href="index.php?page=berita_detail&id='.$result_new['id_berita'].'">'.'</a><img class="card-img-top" src="pengelolah/admin/gbr/'.$result_new['gambar'].'"
      <div class="card-body">
      <h4><a href="index.php?page=berita_detail&id_berita='.$result_new['id_berita'].'">'.$result_new['judul'].'</a></h4>
      <p class="card-text">'.$result_new['isi'].'</p>
      </div>
      </div>
 
    ';
  }
  ?>
     
 </div>
    

        <!-- /.col-lg-9 -->