<div class="container-fluid">
<div class="title" style="text-align:center"><h3>PERTANYAAN</h3></div><br />
<?php 

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'hapus') {
                $id_biaya = $_GET['id'];
                $delete = mysqli_query($koneksi, "DELETE FROM pertanya WHERE id_pertanya='$id_pertanya'");
                if ($delete) {
                    echo '<div class="success">Hapus Berita berhasil</div>';
                }else{
                    echo '<div class="error">Berita gagal dihapus</div>';
                }
            }
        }

        ?>

	<div class="row">
    	<div class="col-lg-12">
        	<section class="panel">
            	<table class="table table-striped table-advance table-hover">
                <tbody>
                	<tr>
                	<th><i class=""></i>No</th>
                    <th><i class=""></i>Nama</th>
                    <th><i class="icon_cogs"></i>Email</th>
                    <th><i class="icon_cogs"></i>No Handphone</th>
                    <th><i class="icon_cogs"></i>Pertanyaan</th>
                    <th><i class="icon_cogs"></i>Action</th>
                    </tr>
                <?php
				//Halaman View User
				$sql = mysqli_query($koneksi, "SELECT * FROM pertanya order by id_pertanya");
				$no=1;
				?>
                <?php

					//Melakukan perulangan sebanyak jumlah data di tabel admin
					while($result=mysqli_fetch_array($sql)){
						echo '<tr><td>'.$no.'</td>
						<td>'.$result['nama'].'</td>
                        <td>'.$result['email'].'</td>
						<td>'.$result['no_hp'].'</td>
						<td>'.$result['pertanyaan'].'

                        <td><a href="index.php?page=adm_balas_chat" class="btn btn-success">Balas</a></td></tr>';

						$no++;
					}
				?>
                </tbody>
              	</table>
                </section>
                </div>
                </div>    