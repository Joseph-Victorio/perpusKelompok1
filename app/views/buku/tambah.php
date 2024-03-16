<div class="ml-100 mr-100">
    <h1 class="text-center">Tambah Data Buku</h1>
    <br>
    <br>
    <form action="<?=BASEURL ?>/buku/simpanBuku" method="POST" class="mx-auto">
        <div class="flex text-center">
            <label for="Judul">Judul Buku</label>
            <input type="text" name="Judul" id="Judul">
        </div>
        <br>
        <div class="flex text-center">
            <label for="Penulis">Penulis Buku</label>
            <input type="text" name="penulis" id="penulis">
        </div>
        <br>
        <div class="flex text-center">
            <label for="Penerbit">Penerbit Buku</label>
            <input type="text" name="Penerbit" id="Penerbit">
        </div>
        <br>
        <div class="flex text-center">
            <label for="Tahun Terbit">Tahun Terbit Buku: </label>
            <input type="number" name="Tahun Terbit" id="Tahun Terbit">
        </div>
        <br>
        <div class="text-center">
            <button type="submit" name="simpan" class="btnKu ">Simpan</button>
        </div>
    </form>
</div>