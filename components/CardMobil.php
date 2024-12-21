<?php  
require './config/koneksi.php';
$data_mobil = mysqli_query($db , "SELECT * FROM tb_mobil");
?>

<div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($data_mobil as $mobil) : ?>
        <div class="col">
          <div class="card h-100 shadow">
            <img src="path/to/image.jpg" class="card-img-top" alt="Gambar Mobil" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($mobil['nama_mobil']); ?></h5>
              <p class="card-text"><?= htmlspecialchars($mobil['deskripsi']); ?></p>
              <p class="card-text"><strong>Harga: <?= htmlspecialchars($mobil['harga_mobil']); ?></strong></p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-primary">Detail</a>
            </div>
            <div class="card-footer d-flex justify-content-end gap-2">
              <a href="pages/update.php?nama_mobil=<?= $mobil['id'];?>" class="btn btn-primary">update</a>
              <a href="hapus-data.php?id=<?= $mobil["id"] ?>" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>