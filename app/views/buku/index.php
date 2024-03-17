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
<!--MAIN-->
<h1 class="text-center">Buku</h1>
<br>
<br>
<a href="<?=BASEURL?>/buku/tambah" class="btnKu absolute right-4">Tambah Data</a>
<br><br><br>
<div class="ml-100 mr-100">
    <table>
    <tr>
        <th>Judul Buku</th>
        <th>penulis Buku</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
        <th>Opsi</th>
    </tr>
    <?php foreach($data['buku'] as $buku) :          ?>
    <tr>
        <td><?=$buku['judul_buku'];?></td>
        <td><?=$buku['penulis_buku'];?></td>
        <td><?=$buku['penerbit_buku'];?></td>
        <td><?=$buku['tahun_terbit'];?></td>
        <td><?=$buku['stok_buku'];?></td>
        <td>
            <a href="<?= BASEURL ?>/buku/hapus/<?= $buku['id_buku']?>"  onclick="confirm('Hapus data?')"><i class='bx bxs-trash' style='color:#ff0000'  ></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>


</div>