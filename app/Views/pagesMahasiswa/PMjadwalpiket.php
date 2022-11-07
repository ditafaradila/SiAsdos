<?= $this->extend('pagesMahasiswa/PMtemplate') ?>
<?= $this->section('content') ?>

<h1 align="center">Sistem Informasi Asisten Dosen</h1>
<br>

<div align="center">
    <h6>Jadwal Piket Lab S1 dan D3 Semester Genap T.A 2022/2023</h6>
    <h6>Jurusan Ilmu Komputer Fakultas Matematika dan Ilmu Pengetahuan Alam</h6>
</div>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Senin</th>
                <th scope="col">Selasa</th>
                <th scope="col">Rabu</th>
                <th scope="col">Kamis</th>
                <th scope="col">Jumat</th>
                <th scope="col">Lab</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $no = 1;
            foreach ($jadwalpiket as $jdlp) :
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $jdlp['senin'] ?></td>
                    <td><?= $jdlp['selasa'] ?></td>
                    <td><?= $jdlp['rabu'] ?></td>
                    <td><?= $jdlp['kamis'] ?></td>
                    <td><?= $jdlp['jumat'] ?></td>
                    <td><?= $jdlp['lab'] ?></td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>