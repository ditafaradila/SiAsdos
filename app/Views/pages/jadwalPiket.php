<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="col-md-12 mt-5">
        <!--judul-->
        <div class="card-header bg-info text-white">
            <center> Jadwal Piket Lab S1 dan D3 Semester Genap T.A 2022/2023 </center>
        </div>

        <div class="card-body">
            <div>
                <a href="<?= ('buat') ?>" class="btn btn-success float-right my-2 px-3"><i class="fa fa-plus"></i> Tambah </a>
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
                            <th scope="col">AKSI</th>
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
                                <td>
                                    <div class="d-flex">
                                        <a href="/ubah/<?= $jdlp['id'] ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                                        <form method="POST" action="/hapus/<?= $jdlp['id'] ?>">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
        </div>
    </div>
</div>
<?= $this->endSection() ?>