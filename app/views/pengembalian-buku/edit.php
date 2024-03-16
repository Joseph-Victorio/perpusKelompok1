<div class="ml-100 mr-100">
    <h1 class="text-center">Edit Data Pengembalian</h1>

    <br>
    <br>
    <form action="<?=BASEURL ?>/pengembalian/updatePengembalian" method="POST" class="mx-auto">
        <div class="flex text-center">
            <label for="tgl">Tanggal Pengembalian: </label>
            <input type="date" name="tgl" id="tgl" value="<?= $data['buku']['tgl_pengembalian'] ?>">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idamdin">ID Admin: </label>
            <input type="number" name="idadmin" id="idadmin" value="<?= $data['buku']['id_admin'] ?>" >
        </div>
        <br>
        <div class="flex text-center">
            <label for="idbuku">ID Buku: </label>
            <input type="number" name="idbuku" id="idbuku" value="<?= $data['buku']['id_buku']?>">
        </div>
        <br>
        <div class="flex text-center">
            <label for="idmahasiswa">ID Mahasiswa: </label>
            <input type="number" name="idmahasiswa" id="idmahasiswa" value="<?= $data['buku']['id_mhs']?>">
        </div>
        <br>
        <br>
        <div class="text-center">
            <button type="submit" name="simpan" class="btnKu ">Simpan</button>
        </div>
    </form>
</div>