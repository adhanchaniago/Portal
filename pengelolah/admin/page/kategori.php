<div class="container-fluid">
<div class="title" style="text-align:center"><h3>MANAJEMEN KATEGORI</h3></div><br />
<?php 

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'hapus') {
                $id_katagori = $_GET['id'];
                $delete = mysqli_query($koneksi, "DELETE FROM sub_Katagori WHERE id_katagori='$id_katagori'");
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
                    <th><i class=""></i>Nama Kategori</th>
                    <th><i class="icon_cogs"></i>Deskripsi</th>
                    <th><i class="icon_cogs"></i>Action</th>
                    </tr>
                <?php
				//Halaman View User
				$sql = mysqli_query($koneksi, "SELECT * FROM sub_Katagori order by nm_katagori");
				$no=1;
				?>
                <a href="index.php?page=adm_tambah_kategori" class="btn btn-success">TAMBAH</a>
                <?php
					//Melakukan perulangan sebanyak jumlah data di tabel admin
					while($result=mysqli_fetch_array($sql)){
						echo '<tr><td>'.$no.'</td>
						<td>'.$result['nm_katagori'].'</td>
						<td>'.$result['deskerpsi'].'</td>
						<td><a href="index.php?page=adm_edit_katagori&id='.$result['nm_katagori'].'"
							class="btn btn-warning">EDIT</a>
                            <a href="index.php?page=kategori&id='.$result['id_katagori'].'"
                            class="btn btn-danger">Hapus</a>
						</td></tr>';
						$no++;
					}
				?>
                </tbody>
              	</table>
                </section>
                </div>
                </div>    