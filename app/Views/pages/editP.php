<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <center> EDIT PENGUMUMAN ASISTEN DOSEN 2022 </center>
                </div>
                <div class="card-body">
                    <form method="POST" action="/updateP/<?= $pengumuman['id'] ?>">
                        <!-- <input type="hidden" name="_method" value="PUT" /> -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama *</label>
                                    <input type="text" name='nama' class="form-control" value="<?= $pengumuman['nama'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NPM *</label>
                                    <input type="text" name='npm' class="form-control" value="<?= $pengumuman['npm'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mata Kuliah *</label>
                                    <input type="text" name='mk' class="form-control" value="<?= $pengumuman['mk'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Semester *</label>
                                    <input type="text" name='semester' class="form-control" value="<?= $pengumuman['semester'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kelas *</label>
                                    <input type="text" name='kelas' class="form-control" value="<?= $pengumuman['kelas'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning float-right px-3"> <i class="fa fa-retweet"></i>Update </button>
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