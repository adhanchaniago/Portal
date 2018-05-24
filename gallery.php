<!--MENU GALERI-->
<h1 class="my-4 text-center text-lg-left">Gallery</h1>
<div class="row"><!-- menu Home perulangans-->


<?php
  
  $sql_new = mysqli_query($koneksi,"SELECT * FROM berita ORDER by id_berita DESC");
  
  while($result_new=mysqli_fetch_array($sql_new))
  {
    echo'
    
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
      <a href="index.php?page=berita_detail&id_berita='.$result_new['id_berita'].'">'.'</a><img class="card-img-top" src="pengelolah/admin/gbr/'.$result_new['gambar'].'"
      <div class="card-body">
      <h4><a href="index.php?page=berita_detail&id_berita='.$result_new['id_berita'].'">'.$result_new['judul'].'</a></h4>
      <p class="card-text">'.$result_new['isi'].'</p>
      </div>
      </div>
    
    ';
  }
  ?>
     
 </div>