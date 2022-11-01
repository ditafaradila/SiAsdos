<?php

use Kint\Zval\Value;
?>
<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>
<div class="md-6 mt-3">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Siswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form  action="/ubah/<?=$value['id']?> ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Kode MK</label>
                    <input type="text" class="form-control"  name="mk" id="mk" value="<?= $value['mk'] ?>>
                </div>
                <div class="form-group">
                    <label>Kurikulum</label>
                    <input type="text" class="form-control"  name="kurikulum" id="kurikulum" value="<?= $value['kurikulum'] ?>>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control"  name="nama" id="nama" value="<?= $value['nama'] ?>>
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="text" class="form-control" name="npm" id="npm" value="<?= $value['npm'] ?>>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $value['kelas'] ?>>
                        <!-- <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option> -->
                    <!-- </select> -->
                </div>
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" class="form-control" name="nilai" id="nilai" value="<?= $value['nilai'] ?>>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    <?= $this->endSection() ?>