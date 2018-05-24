<div class="container-fluid">
<div class="title" style="text-align:center"><h3>INFOMASI TOUER</h3></div><br />
<?php 

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'hapus') {
                $id_biaya = $_GET['id'];
                $delete = mysqli_query($koneksi, "DELETE FROM biaya WHERE id_biaya='$id_biaya'");
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
                    <th><i class=""></i>Tujuan</th>
                    <th><i class="icon_cogs"></i>Jumlah Hari</th>
                    <th><i class="icon_cogs"></i>Biaya</th>
                    <th><i class="icon_cogs"></i>Action</th>
                    </tr>
                <?php
				//Halaman View User
				$sql = mysqli_query($koneksi, "SELECT * FROM biaya order by id_biaya");
				$no=1;
				?>
                <a href="index.php?page=adm_tambah_biaya" class="btn btn-success">TAMBAH</a>
                <?php

					//Melakukan perulangan sebanyak jumlah data di tabel admin
					while($result=mysqli_fetch_array($sql)){
						echo '<tr><td>'.$no.'</td>
						<td>'.$result['tujuan'].'</td>
						<td>'.$result['jumlah_hari'].'</td>
						<td>Rp.'.$result['harga'].'

                        <td><a href="index.php?page=adm_edit_biaya&id='.$result['id_biaya'].'"
                            class="btn btn-warning">EDIT</a>
                            <a href="index.php?page=harga&action=hapus&id='.$result['id_biaya'].'"
                            class="btn btn-danger">Hapus</a></td></tr>';

						$no++;
					}
				?>
                </tbody>
              	</table>
                </section>
                </div>
                </div>    