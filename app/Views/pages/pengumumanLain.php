<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
<div class="md-6 mt-3">
    <!-- general form elements -->
    <div class="card card-primary">
    <div class="card-header bg-primary text-white">
            <center> Pengumuman Asisten Dosen </center>
        </div>
        <form id="quickForm" action="http://localhost:8080/create" method="post">
            <div class="card-body ">
                <div class="form-group">
                    <label>Title Anouncement</label>
                    <input type="text" class="form-control is-valid" placeholder="Enter ..." name="judul" id="judul">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Content of Anouncement</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>
