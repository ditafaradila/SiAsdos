<?= $this->extend('pagesMahasiswa/PMtemplate') ?>
<?= $this->section('content') ?>

<div class="container">

    <div class="row">
        <div class="col-md-12 mt-5">

            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> PRESENSI MAHASISWA 2022 </center>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/updateAbsenMhs/<?= $absenMhs['id'] ?>">

                        <div class="row">
                            <div class="col-6 mx-3">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label>Nama Lengkap *</label>
                                        <input type="text" name='namaMhs' class="form-control" placeholder="Isi Nama Lengkap Anda" value="<?= $absenMhs['namaMhs'] ?>">
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <div class="form-group">
                                        <label>NPM *</label>
                                        <input type="text" name='npmMhs' class="form-control" placeholder="Isi NPM Anda" value="<?= $absenMhs['npmMhs'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Semester *</label>
                                    <select id="semester" name="semester" class="form-control">
                                        <?php foreach ($semester as $semester) : ?>
                                            <?php if ($semester['semester'] == $semester['semester']) : ?>
                                                <option selected value="<?= $semester['semester'] ?>"><?= $semester['semester'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $semester['semester'] ?>"><?= $semester['semester'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="mata_kuliah" class="form-label">Mata Kuliah *</label>
                                    <select id="mata_kuliah" name="mata_kuliah" class="form-control">
                                        <?php foreach ($matakuliah as $matakuliah) : ?>
                                            <?php if ($matakuliah['mata_kuliah'] == $matakuliah['mata_kuliah']) : ?>
                                                <option selected value="<?= $matakuliah['mata_kuliah'] ?>"><?= $matakuliah['mata_kuliah'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $matakuliah['mata_kuliah'] ?>"><?= $matakuliah['mata_kuliah'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ruang" class="form-label">Ruang *</label>
                                    <select id="ruang" name="ruang" class="form-control">
                                        <?php foreach ($ruang as $ruang) : ?>
                                            <?php if ($ruang['ruang'] == $ruang['ruang']) : ?>
                                                <option selected value="<?= $ruang['ruang'] ?>"><?= $ruang['ruang'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $ruang['ruang'] ?>"><?= $ruang['ruang'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas *</label>
                                    <select id="kelas" name="kelas" class="form-control">
                                        <?php foreach ($kelas as $kelas) : ?>
                                            <?php if ($kelas['kelas'] == $kelas['kelas']) : ?>
                                                <option selected value="<?= $kelas['kelas'] ?>"><?= $kelas['kelas'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $kelas['kelas'] ?>"><?= $kelas['kelas'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="hari" class="form-label">Hari *</label>
                                    <select id="hari" name="hari" class="form-control">
                                        <?php foreach ($hari as $hari) : ?>
                                            <?php if ($hari['hari'] == $hari['hari']) : ?>
                                                <option selected value="<?= $hari['hari'] ?>"><?= $hari['hari'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $hari['hari'] ?>"><?= $hari['hari'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jam_masuk" class="form-label">Jam Masuk *</label>
                                    <select id="jam_masuk" name="jam_masuk" class="form-control">
                                        <?php foreach ($jam as $jam) : ?>
                                            <?php if ($jam['jam_masuk'] == $jam['jam_masuk']) : ?>
                                                <option selected value="<?= $jam['jam_masuk'] ?>"><?= $jam['jam_masuk'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $jam['jam_masuk'] ?>"><?= $jam['jam_masuk'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning float-end px-3"> <i class="fa fa-save"></i> Simpan Perubahan</button>
                                    </div>
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