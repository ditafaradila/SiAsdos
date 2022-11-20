<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <center> Tambah Jadwal Piket Lab S1 dan D3 Semester Genap T.A 2022/2023 </center>
                </div>
                <div class="card-body">
                    <form method="POST" action="/store">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="senin" class="form-label">Senin</label>
                                    <input type="text" class="form-control" name="senin" id="senin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selasa" class="form-label">Selasa</label>
                                    <input type="text" class="form-control" name="selasa" id="selasa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rabu" class="form-label">Rabu</label>
                                    <input type="text" class="form-control" name="rabu" id="rabu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kamis" class="form-label">Kamis</label>
                                    <input type="text" class="form-control" name="kamis" id="kamis">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jumat" class="form-label">Jumat</label>
                                    <input type="text" class="form-control" name="jumat" id="jumat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lab" class="form-label">Lab</label>
                                    <input type="text" class="form-control" name="lab" id="lab">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-end px-3"> <i class="fa fa-save"></i> Simpan </button>
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