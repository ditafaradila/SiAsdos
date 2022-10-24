<?= $this->extend('Astemplate') ?>
<?= $this->section('content') ?>

<form method="POST" action="/update/<?= $asdos['npm'] ?>">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?= $asdos['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" aria-describedby="npm" value="<?= $asdos['npm'] ?>">
            </div>
            <div class="mb-3">
                <label for="tahun_kurikulum" class="form-label">Tahun Kurikulum</label>
                <input type="text" class="form-control" name="tahun_kurikulum" id="tahun_kurikulum" aria-describedby="tahun_kurikulum" value="<?= $asdos['tahun_kurikulum'] ?>">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Study</label>
                <input type="text" class="form-control" name="prodi" id="prodi" aria-describedby="prodi" value="<?= $asdos['prodi'] ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" id="status" aria-describedby="status" value="<?= $asdos['status'] ?>">
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jk" id="jk" aria-describedby="jk" value="<?= $asdos['jk'] ?>">
            </div>
            <div class="mb-3">
                <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" aria-describedby="tempatlahir" value="<?= $asdos['tempatlahir'] ?>">
            </div>
            <div class="mb-3">
                <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" aria-describedby="tanggallahir" value="<?= $asdos['tanggallahir'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="teks" class="form-control" name="email" id="email" aria-describedby="email" value="<?= $asdos['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="teks" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" value="<?= $asdos['alamat'] ?>">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="bi bi-send"></i>Submit</button>
</form>

<?= $this->endSection() ?>