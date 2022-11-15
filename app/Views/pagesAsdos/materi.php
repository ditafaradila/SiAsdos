<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="col-md-12 mt-5">
        <!--judul-->
        <div class="card-header bg-info text-white">
            <center> Materi Asisten Dosen </center>
        </div>

        <div class="card-body">
            <a href="/Cmateri" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Create</a>
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
                            <td>
                                <div class="d-flex">
                                    <!-- <a href="/Emateri/<?= $mtr['id'] ?>" type="button" class="btn btn-warning"><i class="fa fa-pen"></i>Edit</a> -->
                                    <form method="POST" action="/Delete/<?= $mtr['id'] ?>">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </tbody>
            </table>
        </div>

        <?= $this->endSection() ?>
