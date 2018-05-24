
<?php
		$id_berita	= isset($_GET['id_berita']) ? $_GET['id_berita'] : "";
		$sql_new = mysqli_query($koneksi,"SELECT * FROM berita a, admin b where id_berita ORDER by id_berita='$id_berita' LIMIT 1 ");
		while($result_new=mysqli_fetch_array($sql_new))
	{
    echo'
<!-- Title -->
<h1 class="mt-4">'.$result_new['judul'].'</h1>
	
<hr>
	<!-- Date/Time -->
	<p>Post by<a href="#">&nbsp;&nbsp;'.$result_new['penulis'].'</a>&nbsp;&nbsp;&nbsp;<i>Tanggal Post</i> '.$result_new['waktu'].'</p>
<hr>
<!-- Preview Image -->
<img width="100%;" class="img-fluid rounded" src="pengelolah/admin/gbr/'.$result_new['gambar'].'" alt="">
<hr>
<p class="lead">'.$result_new['isi'].'</p>

		<hr>

		';
  }
  ?>
<!-- Comments Form -->
<div class="card my-4">
	<h5 class="card-header">Leave a Comment:</h5>
	<div class="card-body">
		<form>
			<div class="form-group">
			<textarea class="form-control" rows="3"></textarea>
			</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>


  <!-- Single Comment -->
  <div class="media mb-4">
	<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
	<div class="media-body">
	  <h5 class="mt-0">Commenter Name</h5>
	  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	</div>
  </div>
