<!DOCTYPE html>
<html>
<head>
    <title><?= $data['judul']; ?></title>
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
            <li>
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
                        <h1 class="page-header">Dashboard</h1>
                        <div class="baris">
				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Data Barang</p>

									<h2><?=$data['Buku']?></h2>

								</div>
								<div class="card-panel">
                <i class="bx bxs-book"></i>
              </div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Data Mahasiswa</p>

                  <h2><?=$data['Mahasiswa']?></h2>

								</div>
                <div class="card-panel">
                <i class="bx bxs-user"></i>
                </div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Data Peminjaman</p>

                  <h2><?=$data['Peminjaman']?></h2>

								</div>
                <div class="card-panel">
                <i class="bx bxs-cog"></i>
                </div>
								</div>
							</div>
						</div>
					</div>

        <div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Data Pengembalian</p>

                  <h2><?=$data['Pengembalian']?></h2>

								</div>
                <div class="card-panel">
                <i class="bx bxs-book"></i>
                </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
        </main>
    </section>
    <script src="../public/js/script.js"></script>
</body>
</html>
