<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<h1 align="center">Sistem Informasi Asisten Dosen</h1>
<br>

<div align="center">
  <h6>Jadwal Asisten Dosen S1 dan D3 Semester Genap T.A 2022/2023</h6>
  <h6>Jurusan Ilmu Komputer Fakultas Matematika dan Ilmu Pengetahuan Alam</h6>
</div>
<div>
  <a href="/create" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Create</a>
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
        <th scope="col">AKSI</th>
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
          <td>
            <div class="d-flex">
              <a href="/edit/<?= $asds['id'] ?>" type="button" class="btn btn-warning"><i class="fa fa-pen"></i>Edit</a>
              <form method="POST" action="/delete/<?= $asds['id'] ?>">
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
