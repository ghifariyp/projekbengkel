<?php
include('db.php');
 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
 
$query = mysql_query("insert into login values('', '$username', '$email', '$password')") or die(mysql_error());
 
if ($query) {
	echo '<script>alert("Berhasil Menambah Data !");</script>';
    echo '<meta http-equiv="Refresh" content="0; url=index.html">';
}
?>