<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <center> TAMBAH PENGUMUMAN ASISTEN DOSEN 2022 </center>
                </div>
                <div class="card-body">
                    <a href="<?= ('pengumuman') ?>" class="btn btn-danger float-end my-2"><i class="fa fa-chevron-left"></i> Back </a>
                    <form method="POST" action="<?= base_url('/storeP') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama *</label>
                                    <input type="text" name='nama' class="form-control" placeholder="Isi Nama Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NPM *</label>
                                    <input type="text" name='npm' class="form-control" placeholder="Isi NPM Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mata Kuliah *</label>
                                    <input type="text" name='mk' class="form-control" placeholder="Isi Mata Kuliah yang diajar Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Semester *</label>
                                    <input type="text" name='semester' class="form-control" placeholder="Isi Semester yang diajar Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kelas *</label>
                                    <input type="text" name='kelas' class="form-control" placeholder="Isi Kelas yang diajar Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right px-3"> <i class="fa fa-save"></i> Simpan </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>