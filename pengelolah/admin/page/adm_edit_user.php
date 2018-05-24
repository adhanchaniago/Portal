<?php
	if(isset($_POST['edit_user'])){
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$role = $_POST['admin_role'];
			if(empty($password)){
				echo '<div class="warning">Data tidak boleh kosong</div>';
			}else{
				if(empty($username)){
					$edit = mysqli_query($koneksi, "UPDATE admin SET admin_role='$role' WHERE admin_username='$username'");
				}else{
					$edit = mysqli_query($koneksi, "UPDATE admin SET admin_password='$password',admin_role='$role' WHERE admin_username='$username'");
				}
				if($edit){
					echo'<div class="success">user berhasil diedit</div>';
				}else{
					echo '<div class="error">user gagal diedit</div>';
				}
			}
		}
		
		$admin_username = $_GET['id'];
		$sql = mysqli_query($koneksi,"SELECT * FROM admin WHERE admin_username = '$admin_username'");
		$result = mysqli_fetch_array($sql);
		?>	
			<div class="col-lg-6">
  <form method="post" action="">
    <fieldset style="border: 0px solid orange;">
	<h1 align="center">EDIT USER</h1>
      <a href="index.php?page=user" class="btn btn-sm btn-warning"> << Kembali ke user management</a>
      <br/>
      <label>Username</label>
      <input type="text" name="username" placeholder="Username" class="form-control" readonly="readonly" value="<?php echo $result['admin_username'];?>">
      <br/>
      <label>Password</label>
      <input type="text" name="password" placeholder="password" class="form-control" value="">
      <br>
      <label>Role</label>
      <select name="admin_role" class="form-control">
        <option value="admin" <?php if ($result['admin_role'] == "admin"){?> selected="selected" <?php } ?>>Admin</option>
        <option value="editor" <?php if ($result['admin_role'] == "editor"){?> selected="selected" <?php } ?>>Editor</option>
      </select>
      <br/>
      <input type="submit" name="edit_user" value="Edit User" class="submit">
    </fieldset>
  </form>
</div>
					