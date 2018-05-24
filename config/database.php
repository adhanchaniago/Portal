<?php  
$host = "localhost";  
$user = "root";  
$pass = "";  
$dtbase = "1611500127_yuliani";  
$koneksi = mysqli_connect($host,$user,$pass,$dtbase);  
if (mysqli_connect_error()){
 echo 'gagal koneksi database' .mysqli_connect_error();
}

?>  