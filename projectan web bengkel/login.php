<?php session_start(); 
include "db.php"; 
$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysql_query("select * from login where username='$username' and password='$password'"); 
$cek=mysql_num_rows($query); 
if($cek){ 
$_SESSION['username']=$username; 
?>
<meta http-equiv="Refresh" content="0; url=home.php">
<?php 
}else{ 
?>Anda gagal login. silahkan <a href="index.html">Login kembali</a><?php 
echo mysql_error(); 
} 
?> 
