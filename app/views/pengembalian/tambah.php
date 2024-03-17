<div class="ml-100 mr-100">
    <h1 class="text-center">Tambah Data Pengembalian</h1>
    <br>
    <br>
    <form action="<?=BASEURL ?>/pengembalian-buku/simpanPengembalian" method="POST" class="mx-auto">
        <div class="flex text-center">
            <label for="tgl">Tanggal Pengembalian: </label>
            <input type="date" name="tgl" id="tgl">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idamdin">nama Admin yang meminjamkan: </label>
            <input type="text" name="idadmin" id="idadmin">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idbuku">Judul Buku: </label>
            <input type="text" name="idbuku" id="idbuku">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idmahasiswa">Nama Mahasiswa: </label>
            <input type="text" name="idmahasiswa" id="idmahasiswa">
        </div>
        <br>
        <br>
        <div class="text-center">
            <button type="submit" name="simpan" class="btnKu ">Simpan</button>
        </div>
    </form>
</div>