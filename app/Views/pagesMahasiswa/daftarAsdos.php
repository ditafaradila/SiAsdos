<?= $this->extend('pagesMahasiswa/PMtemplate') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> DAFTAR ASISTEN DOSEN </center>
                    </h4>
                </div>
                <div class="card-body">
                <form method="POST" action="/simpanDaftar" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="npm" class="form-label">Nomor Pokok Mahasiswa</label>
                                <input type="text" class="form-control" name="npm" id="npm" aria-describedby="npm">
                            </div>
                            <div class="mb-3">
                                <label for="pil1" class="form-label">Mata Kuliah Pilihan Pertama</label>
                                <input type="text" class="form-control" name="pil1" id="pil1" aria-describedby="pil1">
                            </div>
                            <div class="mb-3">
                                <label for="pil2" class="form-label">Mata Kuliah Pilihan Kedua</label>
                                <input type="text" class="form-control" name="pil2" id="pil2">
                            </div>
                            <div class="mb-3">
                                <label for="ipk1" class="form-label">Nilai Mata Kuliah Pilihan Pertama</label>
                                <input type="text" class="form-control" name="ipk1" id="ipk1">
                            </div>
                            <div class="mb-3">
                                <label for="ipk2" class="form-label">Nilai Mata Kuliah Pilihan Pertama</label>
                                <input type="text" class="form-control" name="ipk2" id="ipk2">
                            </div>
                            <div class="mb-3">
                                    <label for="cv" class="form-label">Lampiran (CV)</label>
                                    <input type="file" class="form-control-file" name="cv" id="cv">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fa fa-paper-plane"></i> Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>