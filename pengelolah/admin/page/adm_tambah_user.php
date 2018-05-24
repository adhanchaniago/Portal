<div class="container fluid">
	<h1 align="center">Halaman Tambah User</h1>
	<a href="index.php?page=user" class="btn btn-sm btn-warning"> << Kembali ke user management </a>
		<?php
		if (isset($_POST['submit_user'])) {
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$role = $_POST['admin_role'];

			if (empty($username) || empty($password)) {
				echo '<div class="warning">Data Tidak Boleh Kosong</div>';
			}else{
				$insert = mysqli_query($koneksi, "INSERT INTO admin(admin_username,admin_password,admin_role) 
					VALUES('$username','$password','$role')");
				if ($insert) {
					echo '<div class="success">User berhasil disimpan</div>';
				}else{
					echo '<div class="warning">User gagal disiman</div>';
				}
			}
		}
		  ?>
		  <div class="panel-heading">
		  	<form method="post" action="">
		  		<label>Username</label>
		  		<input type="text" name="username" placeholder="" class="form-control">
		  		<br>
		  		<label>Password</label>
		  		<input type="password" name="password" placeholder="Password" class="form-control">
		  		<br>
		  		<label>Role</label>
		  		<select name="admin_role" class="form-control">
		  			<option value="admin">admin</option>
		  			<option value="editor">editor</option>
		  		</select>
		  		<br>
		  		<input type="submit" name="submit_user" value="SIMPAN" class="submit">
		  	</form>
		  </div>
		</div>