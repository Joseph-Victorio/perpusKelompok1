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
            <label for="idamdin">ID Admin: </label>
            <input type="number" name="idadmin" id="idadmin">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idbuku">ID Buku: </label>
            <input type="number" name="idbuku" id="idbuku">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idmahasiswa">ID Mahasiswa: </label>
            <input type="number" name="idmahasiswa" id="idmahasiswa">
        </div>
        <br>
        <br>
        <div class="text-center">
            <button type="submit" name="simpan" class="btnKu ">Simpan</button>
        </div>
    </form>
</div>