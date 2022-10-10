<?= $this->extend('template')?>
<?= $this->section('content') ?>

<h3>Materi Asisten Dosen</h3>
<div class="btn-group">
    <button type="button" class="btn btn-warning">Semester</button>
    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Semester 1</a>
            <a class="dropdown-item" href="#">Semester 3</a>
            <a class="dropdown-item" href="#">Semester 5</a>
            <a class="dropdown-item" href="#">Semester 7</a>
        </div>
</div>

<?= $this->endSection() ?>