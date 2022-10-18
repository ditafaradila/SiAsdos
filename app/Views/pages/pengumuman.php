<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <?php
            if (session()->getFlashdata('status')); {
                echo "<h6>" . session()->getFlashdata('status', "</h6>");
            }

            ?>
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> PENGUMUMAN ASISTEN DOSEN 2022 </center>
                    </h4>
                </div>
                <div class="card-body">
                    <a href="<?= ('createP') ?>" class="btn btn-primary float-right my-2 px-3"><i class="fa fa-plus"></i> Tambah </a>
                    <table class="table table-bordered">
                        <thred>
                            <tr>
                                <th>
                                    <center>ID</center>
                                </th>
                                <th>
                                    <center>Nama</center>
                                </th>
                                <th>
                                    <center>NPM</center>
                                </th>
                                <th>
                                    <center>Mata Kuliah</center>
                                </th>
                                <th>
                                    <center>Semester</center>
                                </th>
                                <th>
                                    <center>Kelas</center>
                                </th>
                                <th>
                                    <center>Dibuat Pada</center>
                                </th>
                                <th>
                                    <center>Aksi</center>
                                </th>
                            </tr>
                        </thred>
                        <tbody>
                            <?php foreach ($pengumuman as $row) : ?>
                                <tr>
                                    <td>
                                        <center><?= $row['id'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row['nama'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $row['npm'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $row['mk'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $row['semester'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $row['kelas'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center><?= $row['created_at'] ?>
                                    </td>
                                    </center>
                                    <td>
                                        <center>
                                            <a href="<?= base_url('editP/' . $row['id']) ?>" class="btn btn-success btn-sm">EDIT</a>
                                            <a href="<?= base_url('deleteP/' . $row['id']) ?>" class="btn btn-danger btn-sm">HAPUS</a>
                                        </center>
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