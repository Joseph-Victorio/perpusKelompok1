<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    
    <link rel="stylesheet" href="<?=BOOTSTRAP?>">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Perpustakaan Kanan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>buku">Buku</a>
            </li>
       
          </ul>
    </div>
    <button class="btn btn-outline-primary"><a href="<?=BASEURL;?>login"></a>Login</button>
  </div>
</nav>