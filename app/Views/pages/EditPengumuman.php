<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
<div class="mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/update/<?= $ini['id'] ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title Anouncement</label>
                                    <input type="text" class="form-control is-valid" placeholder="Enter ..." name="judul" id="judul" class="form-control" value="<?= $ini['judul'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi" class="form-label">Content of Anouncement</label>
                                    <textarea name="deskripsi" class="form-control" id="deskripsi" value="<?= $ini['deskripsi'] ?>"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>

<?= $this->endSection() ?>