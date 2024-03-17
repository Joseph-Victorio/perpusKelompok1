<div class="ml-100 mr-100">
    <h1 class="text-center">Tambah Data Peminjaman</h1>
    <br>
    <br>
    <form action="<?=BASEURL ?>/peminjaman/simpanPeminjaman" method="POST" class="mx-auto">
        <div class="flex text-center">
            <label for="tgl_pinjam">Tanggal Peminjaman: </label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam">
        </div>
        <br>
        <div class="flex text-center">
            <label for="tgl_kembali">Tanggal Pengembalian: </label>
            <input type="date" name="tgl_kembali" id="tgl_kembali">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idamdin">Nama yang meminjamkan Admin: </label>
            <input type="number" name="idadmin" id="idadmin">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idbuku">Judul Buku: </label>
            <input type="number" name="idbuku" id="idbuku">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idmahasiswa">Nama Mahasiswa: </label>
            <input type="number" name="idmahasiswa" id="idmahasiswa">
        </div>
        <br>
        <br>
        <div class="text-center">
            <button type="submit" name="simpan" class="btnKu ">Simpan</button>
        </div>
    </form>
</div>