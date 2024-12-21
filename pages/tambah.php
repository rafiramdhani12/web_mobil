<?php 
include "../components/header.php"
?>

<section>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="p-4 border rounded-3 shadow-sm" style="max-width: 400px; width: 100%;">
            <form action="./actions/aksi-tambah-mobil.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-4 text-secondary">Tambah Data Mobil</h3>

                <!-- Input Nama Mobil -->
                <div class="mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        name="nama_mobil" 
                        placeholder="Nama Mobil" 
                        required>
                </div>

                <!-- Input Deskripsi -->
                <div class="mb-3">
                    <textarea 
                        class="form-control" 
                        name="deskripsi" 
                        placeholder="Deskripsi Mobil" 
                        rows="3" 
                        required></textarea>
                </div>

                <!-- Input Harga -->
                <div class="mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        name="harga_mobil" 
                        placeholder="Harga Mobil" 
                        required>
                </div>

                <!-- Input Gambar -->
                <div class="mb-3">
                    <input 
                        type="file" 
                        class="form-control" 
                        name="gambar" 
                        accept="image/*" 
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
include "../components/footer.html"
?>