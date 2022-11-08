<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">S1 Basis Data </h3>
                    </div>
                    <div class="p-4">
                        <a href="/tambah" type="button" class="btn btn-primary mb-3">Tambah</a>
                        <div class="card-body">
                            <form action="/ubah/<?= $value['id'] ?> ?>" method="post">
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
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td>
                                                <select name="mk" id="mk" class="form-control" value="<?= $value['mk'] ?>">
                                                    <?php foreach ($values as $kp) : ?>
                                                        <option value="<?= $kp['mk'] ?>"><?= $kp['mk'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="kurikulum" id="kurikulum" class="form-control" value="<?= $value['kurikulum'] ?>">
                                                    <?php foreach ($p as $kp) : ?>
                                                        <option value="<?= $kp['kurikulum'] ?>"><?= $kp['kurikulum'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="nama" id="nama" value="<?= $value['nama'] ?>"></td>
                                            <td><input type="text" class="form-control" name="npm" id="npm" value="<?= $value['npm'] ?>"></td>
                                            <td><select name="kelas" id="kelas" class="form-control" value="<?= $value['kelas'] ?>">>
                                                    <?php foreach ($kls as $kp) : ?>
                                                        <option value="<?= $kp['kelas'] ?>"><?= $kp['kelas'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="nilai" id="nilai" value="<?= $value['nilai'] ?>"></td>
                                            <td> <button type="submit" class="btn btn-primary">Submit</button></td>
                        </div>
                        </td>
                        </tr>

                        </tfoot>

                        </table>
                        </form>
                    </div>
                </div>

                <?= $this->endSection() ?>
