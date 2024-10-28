<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <!--Searching-->
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="cari">Cari</button>
                </div>
            </form>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <h3>Daftar Mahasiswa</h3>
                    <ul class="list-group">
                        <?php foreach ( $data['mhs'] as $mhs) : ?>
                            <li class="list-group-item">
                                <?= $mhs['nama'];?>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/ <?=$mhs['id']; ?>"
                                   class="badge badge text-bg-danger float-end ms-2" onclick="return confirm('yakin?');"> Hapus</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/ <?=$mhs['id']; ?>"
                                   class="badge badge text-bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"> Ubah</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/ <?=$mhs['id']; ?>"
                                   class="badge badge text-bg-secondary float-end ms-2"> Detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
</div>

<!--modal box-->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <div class="form-text">Isi Nama Lengkap Yang Sesuai</div>
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                        <div class="form-text">Isi Nrp Yang Sesuai</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div class="form-text">Isi Email diGunakan</div>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Planalogi">Teknik Planalogi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>