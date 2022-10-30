<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> REKAPAN PRESENSI ASISTEN DOSEN 2022 </center>
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
                                    <center>Nama Lengkap</center>
                                </th>
                                <th>
                                    <center>NPM</center>
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
                                <th>
                                    <center>Kondisi Ruangan</center>
                                </th>

                            </tr>
                        </thred>
                        <tbody>
                            <?php $no = 1;
                            foreach ($absen as $absenn) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td>
                                        <center><?= $absenn['nama_lengkap'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenn['npm_asdos'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenn['mata_kuliah'] ?>
                                    </td>
                                    <td>
                                        <center><?= $absenn['ruang'] ?>
                                    </td>
                                    <td>
                                        <center><?= $absenn['kelas_praktikan'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenn['hari'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $absenn['jam_masuk'] ?>
                                    </td>
                                    <td>
                                        <center><?= $absenn['kondisi_lab'] ?>
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