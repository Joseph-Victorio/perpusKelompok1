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
<a href="<?=BASEURL?>/mahasiswa/tambah" class="btnKu absolute right-4">Tambah Data</a>
<br><br><br>
<div class="ml-100 mr-100">
    <table>
    <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>kontak</th>
        <th>Opsi</th>
    </tr>
    <?php foreach($data['mahasiswa'] as $mahasiswa) :          ?>
    <tr>
        <td><?=$mahasiswa['nim'];?></td>
        <td><?=$mahasiswa['nama_mhs'];?></td>
        <td><?=$mahasiswa['jurusan'];?></td>
        <td><?=$mahasiswa['alamat'];?></td>
        <td><?=$mahasiswa['kontak'];?></td>
        <td>
            <a href="<?= BASEURL ?>/buku/hapus/<?= $buku['id_buku']?>"  onclick="confirm('Hapus data?')"><i class='bx bxs-trash' style='color:#ff0000'  ></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>


</div>