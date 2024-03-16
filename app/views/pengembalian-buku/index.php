
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

<h1 class="text-center">Pengembalian Buku</h1>
<br>
<br>
<a href="<?=BASEURL?>/pengembalian-buku/tambah" class="btnKu absolute right-4">Tambah Data</a>
<br><br><br>
<div class="ml-100 mr-100">
    <table>
    <tr>
        <th>ID Pengembalian</th>
        <th>Tanggal Pengembalian</th>
        <th>ID Admin</th>
        <th>ID Buku</th>
        <th>ID Mahasiswa</th>
        <th>Opsi</th>
    </tr>
    <?php foreach($data['buku'] as $buku) :          ?>
    <tr>
        <td><?=$buku['idpengembalian'];?></td>
        <td><?=$buku['tgl_pengembalian'];?></td>
        <td><?=$buku['id_admin'];?></td>
        <td><?=$buku['id_buku'];?></td>
        <td><?=$buku['id_mhs'];?></td>
        <td>
            <a href="<?= BASEURL ?>/pengembalian/editPengembalian/<?= $buku['idpengembalian']?>" ><i class='bx bxs-edit-alt' style='color:#00ff13'  ></i></a>
            <a href="<?= BASEURL ?>/pengembalian/delete/<?= $buku['idpengembalian']?>"  onclick="confirm('Hapus data Pengembalian?')"><i class='bx bxs-trash' style='color:#ff0000'  ></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>


</div>