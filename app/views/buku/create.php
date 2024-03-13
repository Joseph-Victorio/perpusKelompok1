<div class="container">
  <h3 class="mb-3">Tambah Buku</h3>
  <form action="<?= BASEURL; ?>/buku/simpanbuku" method="post">
  <div class="class-body">
    <div class="form-group mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="type" class="form-control" id="Judul" name="judul">
    </div>
    <div class="form-group mb-3">
      <label for="penulis" class="form-label">Penulis</label>
      <input type="text" class="form-control" id="penulis" name="penulis">
    </div>
    <div class="form-group mb-3">
      <label for="tgl_selesai">Tanggal Selesai</label>
      <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  </div>
</div>
