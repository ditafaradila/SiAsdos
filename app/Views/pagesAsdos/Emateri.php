<!-- <?= $this->extend('pagesAsdos/Astemplate') ?>
<?= $this->section('content') ?>

<form method="POST" action="/Update/<?= $materi['id'] ?>" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="namate" class="form-label">Nama Materi</label>
                <input type="text" class="form-control" name="namate" id="namate" aria-describedby="namate" value="<?= $materi['namate'] ?>">
            </div>
            <div class="mb-3">
                <label for="matkul" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" name="matkul" id="matkul" aria-describedby="matkul" value="<?= $materi['matkul'] ?>">
            </div>
            <div class="mb-3">
                <label for="pertemuan" class="form-label">Pertemuan</label>
                <input type="text" class="form-control" name="pertemuan" id="pertemuan" aria-describedby="pertemuan" value="<?= $materi['pertemuan'] ?>">
            </div>
            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" name="semester" id="semester" aria-describedby="semester" value="<?= $materi['semester'] ?>">
            </div>
            <div class="mb-3">
                <form>
                    <label for="berkas" class="form-label">File</label>
                    <input type="file" class="form-control-file" name="berkas" id="berkas" aria-describedby="berkas" value="<?= $materi['berkas'] ?>">
                </form>
            </div>
</form>
<button type="submit" class="btn btn-dark"><i class="fa fa-paper-plane"></i> Submit</button>
</form>
<?= $this->endSection() ?> -->