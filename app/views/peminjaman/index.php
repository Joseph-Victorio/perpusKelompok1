<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<h1 class="text-center">Peminjaman Buku</h1>
<br>
<br>
<a href="<?=BASEURL?>/peminjaman/tambah" class="btnKu absolute right-4">Tambah Data</a>
<br><br><br>
<div class="ml-100 mr-100">
    <table>
    <tr>
        <th>ID Peminjaman</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Nama Admin</th>
        <th>Judul Buku</th>
        <th>Nama Mahasiswa</th>
        <th>Opsi</th>
    </tr>
    <?php foreach($data['buku'] as $buku) :          ?>
    <tr>
        <td><?=$buku['id_peminjaman'];?></td>
        <td><?=$buku['tgl_pinjam'];?></td>
        <td><?=$buku['tgl_kembali'];?></td>
        <td><?=$buku['nama_admin'];?></td>
        <td><?=$buku['judul_buku'];?></td>
        <td><?=$buku['nama_mhs'];?></td>
        <td>
            <a href="<?= BASEURL ?>/peminjaman/editPeminjaman<?= $buku['id_peminjaman']?>" ><i class='bx bxs-edit-alt' style='color:#00ff13'  ></i></a>
            <a href="<?= BASEURL ?>/peminjaman/delete/<?= $buku['id_peminjaman']?>"  onclick="confirm('Hapus data Pengembalian?')"><i class='bx bxs-trash' style='color:#ff0000'  ></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>


</div>