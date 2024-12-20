<?php 
include "./components/header.html"
?>

<section>
<div class="min-vh-100 d-flex align-items-center justify-content-center">
<fieldset>
        <form class="text-center mt-5" action="aksi-tambah-mobil.php" method="post">
            <h1 class="text-center pb-4 text-white" >Tambah data mobil</h1>
            <div class="pb-4">
                <input type="text" name="nama_mobil" placeholder="Masukan Nama client">
            </div>
            <div class="pb-4">
                <input type="text" name="deskripsi" placeholder="Masukan Nama client">
            </div>
            <div class="pb-4">
                <input type="text" name="harga_mobil" placeholder="Masukan nohp client">
            </div>
            <button class="rounded-pill text-white bg-primary" type="submit" name="submit">Submit</button>
        </form>
    </fieldset>
</div>
</section>

<?php 
include "./components/footer.html"
?>