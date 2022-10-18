<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/update/<?= $JadwalPiket['id'] ?>">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Senin</label>
                <input type="text" class="form-control" name="senin" id="senin" aria-describedby="senin" value="<?= $jadwalPiket['senin'] ?>">
            </div>
            <div class="mb-3">
                <label for="selasa" class="form-label">Selasa</label>
                <input type="text" class="form-control" name="selasa" id="selasa" aria-describedby="selasa" value="<?= $jadwalPiket['selasa'] ?>">
            </div>
            <div class="mb-3">
                <label for="rabu" class="form-label">Rabu</label>
                <input type="text" class="form-control" name="rabu" id="rabu" aria-describedby="rabu" value="<?= $jadwalPiket['rabu'] ?>">
            </div>
            <div class="mb-3">
                <label for="kamis" class="form-label">Kamis</label>
                <input type="text" class="form-control" name="kamis" id="kamis" aria-describedby="kamis" value="<?= $jadwalPiket['kamis'] ?>">
            </div>
            <div class="mb-3">
                <label for="jumat" class="form-label">Jumat</label>
                <input type="text" class="form-control" name="jumat" id="jumat" aria-describedby="jumat" value="<?= $jadwalPiket['jumat'] ?>">
            </div>
            <div class="mb-3">
                <label for="lab" class="form-label">Lab</label>
                <input type="text" class="form-control" name="lab" id="lab" aria-describedby="lab" value="<?= $jadwalPiket['lab'] ?>">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="bi bi-send"></i>Submit</button>
</form>

<?= $this->endSection() ?>