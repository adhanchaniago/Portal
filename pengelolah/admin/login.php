<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	include "config/database.php";
 ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="username" id="username" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="username" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-lg">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
<?php
	if (isset($_POST['submit']) == 'LOGIN') {
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		if (empty($username) || empty($password)) {

			echo '<div class="warning">Data Tidak Boleh Kosong</div>';
			echo "<meta http_equiv='refresh' content='0 url =login.php'>";
		}else {
			$sql = mysqli_query($koneksi,"SELECT * FROM admin  WHERE admin_username = '$username' 
				and admin_password = '$password'");
			$result = mysqli_fetch_array($sql);
			if ($result[1]) {
				$_SESSION['roles']= 'admin';
				$_SESSION['username_admin'] = $username;
				echo "<script>alert('Anda Berhasil Login')</script>";
				echo "<meta http-equiv='refresh' content='0 url = index.php'>";

			}else{
				echo "<meta http-equiv='refresh' content='0 url = login.php'>";
			}
		}
	}
	if (isset($_GET['action']) == "logout") {
    echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
		session_destroy();
	}




  ?>