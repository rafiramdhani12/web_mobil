<?php 
require "./components/header.html";
require 'koneksi.php';
$data_mobil =  mysqli_query($db , "SELECT * FROM tb_mobil")
?>
<main class="container mt-4">
<div class="min-vh-100 d-flex align-items-center justify-content-center">
  <p>selamat datang di website kami</p>
  <div class="row">
    <?php foreach ($data_mobil as $mobil) : ?>
        <div class="col-md-4">
            <div class="card md-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($mobil['nama_mobil']);?></h5>
                    <p class="card-text"><?= htmlspecialchars($mobil['deskripsi']); ?></p>
                    <p class="card-text"><?= htmlspecialchars($mobil['harga_mobil']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>
</main>

<?php
// Menyisipkan footer
require "./components/footer.html";
?>