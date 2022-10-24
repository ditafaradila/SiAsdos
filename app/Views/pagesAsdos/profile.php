<?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>


<div class="container">
  <div class="card">
    <div class="card-header bg-secondary text-white">
      <a href="/editProfile" type="button" class="btn btn-outline-light"><i class="fa fa-pen"></i>Edit</a>
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td rowspan="8" width="100px"><img src="/assets/AdminLTE/dist/img/rs.jpeg" width="150px" height="auto" border="2"></td>
          </tr>
          <tr>
            <td>
              <p class="text-primary">Nama</p>
            </td>
            <td><?= session()->get('nama'); ?></td>
            <td>
              <p class="text-primary">NPM</p>
            </td>
            <td><?= session()->get('npm'); ?></td>
          </tr>
          <tr>
            <td>
              <p class="text-primary">Program Study</p>
            </td>
            <td><?= session()->get('prodi'); ?></td>
            <td>
              <p class="text-primary">Tahun Kurikulum</p>
            </td>
            <td><?= session()->get('tahun_kurikulum'); ?></td>
          </tr>
          <tr>
            <td>
              <p class="text-primary">Status</p>
            </td>
            <td><?= session()->get('status'); ?></td>
            <td>
              <p class="text-primary">Jenis Kelamin</p>
            </td>
            <td><?= session()->get('jk'); ?></td>
          </tr>
          <tr>
            <td>
              <p class="text-primary">Tempat Lahir</p>
            </td>
            <td><?= session()->get('tempatlahir'); ?></td>
            <td>
              <p class="text-primary">Tanggal Lahir</p>
            </td>
            <td><?= session()->get('tanggallahir'); ?></td>
          </tr>
          <tr>
            <td>
              <p class="text-primary">Email</p>
            </td>
            <td><?= session()->get('email'); ?></td>
            <td>
              <p class="text-primary">Alamat</p>
            </td>
            <td><?= session()->get('alamat'); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>