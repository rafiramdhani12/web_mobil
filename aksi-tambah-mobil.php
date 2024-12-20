<?php 
    // require "koneksi.php";

    if(isset($_POST["submit"])){
        $nama_mobil = $_POST['nama_mobil'];
        $deskripsi = $_POST['deskripsi'];
        $harga_mobil = $_POST["harga_mobil"];

        mysqli_query(mysql: $db, query: "INSERT INTO tb_mobil values('','$deskripsi','$nama_mobil','$harga_mobil')");
        header(header: "location:tambah.php");
    } else {
        header(header: "location:tambah.php");
    }

?>