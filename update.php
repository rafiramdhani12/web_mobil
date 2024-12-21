<?php 
include "./components/header.php";
?>
<?php 
require "./koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($db,"SELECT * FROM tb_mobil WHERE id = '$id'");
$show = mysqli_fetch_assoc($data)
?>

<section>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="p-4 border rounded-3 shadow-sm" style="max-width: 400px; width: 100%;">
            <form action="aksi-edit.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-4 text-secondary">update Data Mobil</h3>

                <input type="hidden" name="id" value="<?= $show['id']; ?>">

                <!-- Input Nama Mobil -->
                <div class="mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        name="nama_mobil" 
                        placeholder="Nama Mobil" 
                        value="<?= $show["nama_mobil"]?>"
                        required>
                </div>

                <!-- Input Deskripsi -->
                <div class="mb-3">
                    <textarea 
                        class="form-control" 
                        name="deskripsi" 
                        placeholder="Deskripsi Mobil" 
                        value="<?= $show["deskripsi"]?>"
                        rows="3" 
                        required></textarea>
                </div>

                <!-- Input Harga -->
                <div class="mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        name="harga_mobil" 
                        value="<?= $show["harga_mobil"]?>"
                        placeholder="Harga Mobil" 
                        required>
                </div>

               

                <!-- Tombol Submit -->
                <button 
                    type="submit" 
                    name="submit" 
                    class="btn btn-primary w-100">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>


<?php 
include "./components/footer.html"
?>