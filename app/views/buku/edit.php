<div class="container">
  <h3 class="mb-3">Edit Buku : <?= $data['buku']['judul'] ?></h3>
  <form action="<?= BASEURL; ?>/buku/updateBuku" method="post">
  <div class="class-body">
    <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
    <div class="form-group mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="type" class="form-control" id="Judul" name="judul" value="<?= $data['buku']['judul'] ?>">
    </div>
    <div class="form-group mb-3">
      <label for="penulis" class="form-label">Penulis</label>
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['buku']['penulis'] ?>">
    </div>
    <div class="form-group mb-3">
      <label for="tgl_selesai">Tanggal Selesai</label>
      <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $data['buku']['tgl_selesai'] ?>">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  </div>
</div>
