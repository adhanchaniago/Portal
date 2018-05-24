<!--MENU pantai-->
<h1 class="my-4 text-center text-lg-center">SEJARAH DI BANGAK BELITUNG</h1>
	
          <div class="row text-center text-lg-left"><!--php perulangan-->
		 <?php
		  $sql_new = mysqli_query($koneksi,"SELECT * FROM berita a, sub_katagori b WHERE a.id_katagori=2 AND b.id_katagori=2 GROUP BY a.id_berita ORDER by b.id_katagori DESC");
		  while($result_new=mysqli_fetch_array($sql_new))
		  {
		    echo'
			<div class="col-md-4">
			  <a href="#" class="d-block mb-4 h-100">
				<img width="100%;" class="img-fluid img-thumbnail" src="pengelolah/admin/gbr/'.$result_new['gambar'].'">
			  </a>
			</div>
			';
			  }
			  ?>
		  </div><!--tutup php perulangan-->
<!--TUTUP MENU GALERI-->