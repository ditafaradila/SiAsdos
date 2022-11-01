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
        <form  action="<?= base_url('/buat') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Kode MK</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="mk" id="mk">
                </div>
                <div class="form-group">
                    <label>Kurikulum</label>
                    <input type="text" class="form-control" placeholder="Masukkan Kurikulum" name="kurikulum" id="kurikulum">
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
                    <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas" id="kelas">
                    <!-- <select class="form-control select2" style="width: 100%;">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                    </select> -->
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