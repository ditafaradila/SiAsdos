<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>
<div class="md-6 mt-3">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= base_url('/buat') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Kode MK</label>
                    <select name="mk" id="mk" class="form-control">
                        <?php foreach ($values as $kp) : ?>
                            <option value="<?= $kp['mk'] ?>"><?= $kp['mk'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kurikulum</label>
                    <select name="kurikulum" id="kurikulum" class="form-control">
                        <?php foreach ($p as $kp) : ?>
                            <option value="<?= $kp['kurikulum'] ?>"><?= $kp['kurikulum'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="text" class="form-control" placeholder="Masukkan NPM" name="npm" id="npm">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" id="kelas" class="form-control">
                        <?php foreach ($kls as $kp) : ?>
                            <option value="<?= $kp['kelas'] ?>"><?= $kp['kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nilai" name="nilai" id="nilai">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    <?= $this->endSection() ?>
