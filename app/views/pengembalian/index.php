<!DOCTYPE html>
<html>
<head>
<title> <?= $data['judul'];?></title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/admin.css">
    <link rel="stylesheet" href="<?=BASEURL?>/css/style.css">
    <link rel="stylesheet" href="<?=BASEURL?>/css/dashboard.css">
</head>
<body>
  <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="<?=BASEURL;?>/admin" class="brand">
			<i class='bx bx-book'></i>
			<span class="text">Perpustakaan Kanan</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a aria-current="page" href="<?=BASEURL;?>/dashboard">
					<i class='bx bxs-home' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="<?=BASEURL;?>/buku">
                    <i class='bx bxs-book'></i>
					<span class="text">Buku</span>
				</a>
			</li>
			<li>
				<a href="<?=BASEURL;?>/mahasiswa">
					<i class='bx bxs-user' ></i>
					<span class="text">Mahasiswa</span>
				</a>
			</li>
			<li>
				<a href="<?=BASEURL;?>/peminjaman">
					<i class='bx bxs-cog' ></i>
					<span class="text">Peminjaman</span>
				</a>
			</li>
			<li class="active">
				<a href="<?=BASEURL;?>/pengembalian">
					<i class='bx bxs-book' ></i>
					<span class="text">Pengembalian</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="<?=BASEURL;?>/login" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
    <!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
		</ul>
		</nav>
		<!-- NAVBAR -->
        


        <main>
			<div class="head-title">
				<div class="left">
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pengembalian Buku</h1>
          <div class="row">
<a href="<?=BASEURL?>/pengembalian/tambah" class="btn btn-danger pull-right"><i class="bx bx-plus"></i>Tambah Data</a>
</div>
<table id="pengembalian" class="tablee">
    <thead>
    <tr>
        <th>ID Pengembalian</th>
        <th>Tanggal Pengembalian</th>
        <th>Admin Yang Meminjamkan</th>
        <th>Judul Buku</th>
        <th>Nama Mahasiswa</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <?php foreach($data['pengembalian'] as $kembali) :          ?>
        <tbody>
    <tr>
        <td><?=$kembali['id_pengembalian'];?></td>
        <td><?=$kembali['tgl_pengembalian'];?></td>
        <td><?=$data['admin']->getAdminNameById($kembali['id_admin']);?></td>
        <td><?=$data['buku']->getBukuNameById($kembali['id_buku']);?></td>
        <td><?=$data['mahasiswa']->getMahasiswaNameById($kembali['id_mhs']);?></td>
        <td>
            <a href="<?= BASEURL ?>/pengembalian/delete/<?= $buku['id_pengembalian']?>"  onclick="confirm('Hapus data Pengembalian?')"><i class='bx bxs-trash' style='color:#ff0000'  ></i></a>
        </td>
    </tr>
    </tbody>
    <?php endforeach; ?>
    
    </table>


</div>
</section>
<script src="../public/js/script.js"></script>

</body>
</html>