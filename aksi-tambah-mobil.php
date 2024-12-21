<?php 
    require "koneksi.php";

    if(isset($_POST["submit"])){
        $nama_mobil = $_POST['nama_mobil'];
        $deskripsi = $_POST['deskripsi'];
        $harga_mobil = $_POST["harga_mobil"];
        $gambar = $_POST["gambar"];

        mysqli_query($db, "INSERT INTO tb_mobil (nama_mobil, deskripsi, harga_mobil, gambar) VALUES ('$nama_mobil', '$deskripsi', '$harga_mobil', '$gambar')");

        header("location:tambah.php");
    } else {
        header("location:tambah.php");
    }

?>