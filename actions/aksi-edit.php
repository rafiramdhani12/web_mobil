<?php 
    require "./config/koneksi.php";

    if(isset($_POST["submit"])){
        $nama_mobil = $_POST['nama_mobil'];
        $deskripsi = $_POST['deskripsi'];
        $harga_mobil = $_POST["harga_mobil"];
        $id = $_POST['id'];  // Pastikan Anda memiliki ID mobil yang ingin diedit

        // Perbaiki query UPDATE, hilangkan koma sebelum 'nama_mobil'
        $query = "UPDATE tb_mobil SET nama_mobil = '$nama_mobil', deskripsi = '$deskripsi', harga_mobil = '$harga_mobil' WHERE id = '$id'";

        // Eksekusi query
        if (mysqli_query($db, $query)) {
            header("location:index.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    } else {
        header("location:index.php");
    }
?>
