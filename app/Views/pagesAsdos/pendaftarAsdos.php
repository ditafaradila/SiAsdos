<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>

<h3 align="center">Pendaftar Asisten Dosen</h3>

<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Pilihan Pertama</th>
                <th scope="col">Pilihan Kedua</th>
                <th scope="col">Nilai MK 1</th>
                <th scope="col">Nilai MK 2</th>
                <th scope="col">CV</th>
                <!-- <th scope="col">Aksi</th> -->
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $no = 1;
            foreach ($pendaftaran as $mtr) :
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $mtr['npm'] ?></td>
                    <td><?= $mtr['nama'] ?></td>
                    <td><?= $mtr['pil1'] ?></td>
                    <td><?= $mtr['pil2'] ?></td>
                    <td><?= $mtr['ipk1'] ?></td>
                    <td><?= $mtr['ipk2'] ?></td>
                    <td><i class="fa fa-file"></i><?= $mtr['cv'] ?></td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>