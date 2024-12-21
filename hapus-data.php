<?php 
require './koneksi.php';
$id = $_GET['id'];
mysqli_query($db,"DELETE FROM tb_mobil WHERE id = '$id'");
echo"<script>
alert('anda telah menghapus data dengan id : $id');
document.location.href = 'index.php';
</script>"

?>