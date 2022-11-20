<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <center> Edit Jadwal Piket Lab S1 dan D3 Semester Genap T.A 2022/2023 </center>
                </div>
                <div class="card-body">
                    <form method="POST" action="/up/<?= $jadwalPiket['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama" class="form-label">Senin</label>
                                    <input type="text" class="form-control" name="senin" id="senin" aria-describedby="senin" value="<?= $jadwalPiket['senin'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selasa" class="form-label">Selasa</label>
                                    <input type="text" class="form-control" name="selasa" id="selasa" aria-describedby="selasa" value="<?= $jadwalPiket['selasa'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rabu" class="form-label">Rabu</label>
                                    <input type="text" class="form-control" name="rabu" id="rabu" aria-describedby="rabu" value="<?= $jadwalPiket['rabu'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kamis" class="form-label">Kamis</label>
                                    <input type="text" class="form-control" name="kamis" id="kamis" aria-describedby="kamis" value="<?= $jadwalPiket['kamis'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jumat" class="form-label">Jumat</label>
                                    <input type="text" class="form-control" name="jumat" id="jumat" aria-describedby="jumat" value="<?= $jadwalPiket['jumat'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lab" class="form-label">Lab</label>
                                    <input type="text" class="form-control" name="lab" id="lab" aria-describedby="lab" value="<?= $jadwalPiket['lab'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning float-end px-3"> <i class="fa fa-retweet"></i>Update </button>
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