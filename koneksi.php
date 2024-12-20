<?php 
$server = "localhost";
$username = "root";
$password = '';
$database = "web_mobil";
$db = mysqli_connect(hostname: $server , username :  $username , password: $password , database: $database);
if (!$db){
    die("gagal terhubung dengan database" . mysqli_connect_error());
}
?>