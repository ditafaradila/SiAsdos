<?= $this->extend('pagesMahasiswa/PMtemplate') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> REKAPAN PRESENSI MAHASISWA 2022 </center>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thred>
                            <tr>
                                <th>
                                    <center>NO</center>
                                </th>
                                <th>
                                    <center>Nama</center>
                                </th>
                                <th>
                                    <center>NPM</center>
                                </th>
                                <th>
                                    <center>Semester</center>
                                </th>
                                <th>
                                    <center>Mata Kuliah</center>
                                </th>
                                <th>
                                    <center>Ruang</center>
                                </th>
                                <th>
                                    <center>Kelas Praktikan</center>
                                </th>
                                <th>
                                    <center>Hari</center>
                                </th>
                                <th>
                                    <center>Jam Masuk</center>
                                </th>

                            </tr>
                        </thred>
                        <tbody>
                            <?php $no = 1;
                            foreach ($absenMhs as $absenMhs) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td>
                                        <center><?= $absenMhs['namaMhs'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenMhs['npmMhs'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenMhs['semester'] ?>
                                    </td>
                                    <td>
                                        <center><?= $absenMhs['mata_kuliah'] ?>
                                    </td>
                                    <td>
                                        <center><?= $absenMhs['ruang'] ?>
                                    </td>
                                    <td>
                                        <center><?= $absenMhs['kelas'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenMhs['hari'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenMhs['jam_masuk'] ?>
                                    </td>


                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>