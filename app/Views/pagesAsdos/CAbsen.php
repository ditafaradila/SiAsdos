<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">

    <div class="row">
        <div class="col-md-12 mt-5">
            <?php
            if (session()->getFlashdata('status')); {
                echo "<h6>" . session()->getFlashdata('status', "</h6>");
            }

            ?>

            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> PRESENSI ASISTEN DOSEN 2022 </center>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('/storeAbsen') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap *</label>
                                    <input type="text" name='nama_lengkap' class="form-control" placeholder="Isi Nama Lengkap Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NPM *</label>
                                    <input type="text" name='npm_asdos' class="form-control" placeholder="Isi NPM Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mata Kuliah *</label>
                                    <input type="text" name='mata_kuliah' class="form-control" placeholder="Isi Mata Kuliah yang diajar Asisten Dosen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ruang *</label>
                                    <input type="text" name='ruang' class="form-control" placeholder="Isi Ruang yang Digunakan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kelas Praktikan *</label>
                                    <input type="text" name='kelas_praktikan' class="form-control" placeholder="Isi Kelas yang diajar Asisten Dosen">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hari *</label>
                                    <input type="text" name='hari' class="form-control" placeholder="Isi Hari Praktikum">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jam Masuk *</label>
                                    <input type="time" name='jam_masuk' class="form-control" placeholder="Isi Waktu Dimulai Praktikum">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kondisi Lab *</label>
                                    <input type="text" name='kondisi_lab' class="form-control" placeholder="Isi Kondisi Lab Saat Melakukan Praktikum">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-end px-3"> <i class="fa fa-save"></i>Simpan </button>
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