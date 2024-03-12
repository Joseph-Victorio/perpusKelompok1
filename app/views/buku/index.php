<div class="container mt-5">
    <div class="row">
        <div class="col-6">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambahkan Data Buku
            </button>
            <br>
            <br>
            <h3>Daftar Buku</h3>
                    <ul class="list-group">
                        <?php foreach($data['buku'] as $buku): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $buku['judul'];?>
                                <a href="<?= BASEURL ?>buku/detail/<?= $buku['idbuku'];?>" class="badge text-bg-primary">Detail</a>
                            </li>
                        <?php endforeach ;?>
                    </ul>
        </div>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL;?>buku/tambah/" method="POST">
            <div class="modal-body">
                
                    <div class="mb-3">
                        <label for="nama" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="nim" placeholder="2191051016" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email@example.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Sistem Informasi">
                                Sistem Informasi
                            </option>
                            <option value="Teknik Informatika">
                                Teknik Informatika
                            </option>
                            <option value="Sistem Komputer">
                                Sistem Komputer
                            </option>
                        </select>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </div>
      </form>
    </div>
  </div>
</div>