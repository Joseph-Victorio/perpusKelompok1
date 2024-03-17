<!DOCTYPE html>
<html>
<head>
<title> Tambah Buku</title>
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
			<li class="active">
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
		</nav>
		<!-- NAVBAR -->
        <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Tambah Data Pengembalian</h1>
          <form role="form1" action="<?=BASEURL ?>/pengembalian/simpanPengembalian" method="post" enctype="multipart/form-data">  
<table>
                 <div class = "edit">
                    <div class ="form-group">
                    <label for="tgl">Tanggal Pengembalian: </label>
                    <input type="date"  name="tgl" class="form-control" required>
                    </div>
                   <div class ="form-group">
                   <label for="idamdin">nama Admin yang meminjamkan: </label>
                    <input type="text"  name="idamdin" class="form-control" placeholder="Nama Admin..." required>
                    </div>
                     <div class ="form-group">
                     <label for="idbuku">Judul Buku: </label>
                    <input type="text"   name="idbuku" 
                    class="form-control" placeholder="Judul Buku..." required>
                    </div>
                    <div class ="form-group">
                    <label for="id_mhs">Nama Mahasiswa: </label>
                    <input type="text"   name="id_mhs" 
                    class="form-control" placeholder="Nama Mahasiswa..." required>
                    </div>
              <div class="box=footer">
            </div>
            <tr>
            <td><button type="submit" class="btn btn-danger" name="simpan">Simpan </button></td>
            </tr>
            </div>
        </div>
      </div>
        </div>
				</div>
                
			</div>
</section>
  <script src="../../public/js/script.js"></script>
</body>
</html>
