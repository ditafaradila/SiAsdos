<?= $this->extend('pagesMahasiswa/PMtemplate') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="card">
        <!--judul-->
        <div class="card-header bg-secondary text-white">
            <h3>
                <center>
                    Materi Praktikum
                </center>
            </h3>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Materi</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Pertemuan</th>
                        <th scope="col">Semester</th>
                        <th scope="col">File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php $no = 1;
                    foreach ($materi as $mtr) :
                    ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $mtr['namate'] ?></td>
                            <td><?= $mtr['matkul'] ?></td>
                            <td><?= $mtr['pertemuan'] ?></td>
                            <td><?= $mtr['semester'] ?></td>
                            <td><?= $mtr['berkas'] ?></td>
                            <td><a class="btn btn-info" href="<?= base_url(); ?>/MateriController/Download/<?= $mtr['id'] ?>">Download</a></td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>