<div class="container-fluid">
<div class="title" style="text-align:center"><h3>MANAJEMEN USER</h3></div><br />
<?php 

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'hapus') {
                $admin_id = $_GET['id'];
                $delete = mysqli_query($koneksi, "DELETE FROM admin WHERE admin_id='$admin_id'");
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
                    <th><i class="icon_profile"></i>Username</th>
                    <th><i class=""></i>User Role</th>
                    <th><i class="icon_cogs"></i>Action</th>
                    </tr>
                <?php
				//Halaman View User
				$sql = mysqli_query($koneksi, "SELECT * FROM admin order by admin_username");
				$no=1;
				?>
                <a href="index.php?page=adm_tambah_user" class="btn btn-success">TAMBAH</a>
                <?php
					//Melakukan perulangan sebanyak jumlah data di tabel admin
					while($result=mysqli_fetch_array($sql)){
						echo '<tr><td>'.$no.'</td><td>'.$result['admin_username'].'</td>
						<td>'.$result['admin_role'].'</td>
						<td><a href="index.php?page=adm_edit_user&id='.$result['admin_username'].'"
							class="btn btn-warning">EDIT</a>
                        <a href="index.php?page=user&action=hapus&id='.$result['admin_id'].'"
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