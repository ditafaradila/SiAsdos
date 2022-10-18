<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/update/<?= $asdos['id'] ?>">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="text" class="form-control" name="jam" id="jam" aria-describedby="jam" value="<?= $asdos['jam'] ?>">
            </div>
            <div class="mb-3">
                <label for="senin" class="form-label">Senin</label>
                <input type="text" class="form-control" name="senin" id="senin" aria-describedby="senin" value="<?= $asdos['senin'] ?>">
            </div>
            <div class="mb-3">
                <label for="selasa" class="form-label">Selasa</label>
                <input type="text" class="form-control" name="selasa" id="selasa" aria-describedby="selasa" value="<?= $asdos['selasa'] ?>">
            </div>
            <div class="mb-3">
                <label for="rabu" class="form-label">rabu</label>
                <input type="text" class="form-control" name="rabu" id="rabu" aria-describedby="rabu" value="<?= $asdos['rabu'] ?>">
            </div>
            <div class="mb-3">
                <label for="kamis" class="form-label">Kamis</label>
                <input type="text" class="form-control" name="kamis" id="kamis" aria-describedby="kamis" value="<?= $asdos['kamis'] ?>">
            </div>
            <div class="mb-3">
                <label for="jumat" class="form-label">Jum'at</label>
                <input type="text" class="form-control" name="jumat" id="jumat" aria-describedby="jumat" value="<?= $asdos['jumat'] ?>">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="bi bi-send"></i>Submit</button>
</form>

<?= $this->endSection() ?>