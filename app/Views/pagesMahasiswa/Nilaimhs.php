<?= $this->extend('pagesMahasiswa/PMtemplate') ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">S1 Basis Data </h3>
                    </div>
                    <div class="p-4">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">


                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Mata Kuliah</th>
                                        <th>Kurikulum</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Kelas</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($value as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $p['mk'] ?></td>
                                            <td><?= $p['kurikulum'] ?></td>
                                            <td><?= $p['nama'] ?></td>
                                            <td><?= $p['npm'] ?></td>
                                            <td><?= $p['kelas'] ?></td>
                                            <td><?= $p['nilai'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tfoot>

                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <?= $this->endSection('content'); ?>