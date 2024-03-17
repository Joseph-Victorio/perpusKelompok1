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
    <?php foreach($data['peminjaman'] as $pinjam) :          ?>
    <tr>
        <td><?=$pinjam['id_peminjaman'];?></td>
        <td><?=$pinjam['tanggal_pinjam'];?></td>
        <td><?=$pinjam['tanggal_kembali'];?></td>
        <td><?=$data['admin']->getAdminNameById($pinjam['id_admin']);?></td>
        <td><?=$data['buku']->getBukuNameById($pinjam['id_buku']);?></td>
        <td><?=$data['mahasiswa']->getMahasiswaNameById($pinjam['id_mhs']);?></td>
        <td>
            <a href="<?= BASEURL ?>/peminjaman/delete/<?= $buku['id_peminjaman']?>"  onclick="confirm('Hapus data Pengembalian?')"><i class='bx bxs-trash' style='color:#ff0000'  ></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>


</div>