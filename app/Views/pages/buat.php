<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/store">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="senin" class="form-label">Senin</label>
                <input type="text" class="form-control" name="senin" id="senin">
            </div>
            <div class="mb-3">
                <label for="selasa" class="form-label">Selasa</label>
                <input type="text" class="form-control" name="selasa" id="selasa">
            </div>
            <div class="mb-3">
                <label for="rabu" class="form-label">Rabu</label>
                <input type="text" class="form-control" name="rabu" id="rabu">
            </div>
            <div class="mb-3">
                <label for="kamis" class="form-label">Kamis</label>
                <input type="text" class="form-control" name="kamis" id="kamis">
            </div>
            <div class="mb-3">
                <label for="jumat" class="form-label">Jumat</label>
                <input type="text" class="form-control" name="jumat" id="jumat">
            </div>
            <div class="mb-3">
                <label for="lab" class="form-label">Lab</label>
                <input type="text" class="form-control" name="lab" id="lab">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="fa fa-paper-plane"></i> Submit</button>
</form>

<?= $this->endSection() ?>