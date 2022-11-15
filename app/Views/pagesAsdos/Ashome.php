<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="col-md-12 mt-5">
    <!--judul-->
    <div class="card-header bg-info text-white">
      <center> Data Jadwal Asisten Dosen </center>
    </div>

    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Jam</th>
            <th scope="col">Senin</th>
            <th scope="col">Selasa</th>
            <th scope="col">Rabu</th>
            <th scope="col">Kamis</th>
            <th scope="col">Jumat</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php $no = 1;
          foreach ($asdos as $asds) :
          ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $asds['jam'] ?></td>
              <td><?= $asds['senin'] ?></td>
              <td><?= $asds['selasa'] ?></td>
              <td><?= $asds['rabu'] ?></td>
              <td><?= $asds['kamis'] ?></td>
              <td><?= $asds['jumat'] ?></td>
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
