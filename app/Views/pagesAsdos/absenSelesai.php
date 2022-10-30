<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container">

    <div class="row">
        <div class="col-md-12 mt-5">

            <div class="card">
                <div class="card-header">
                    <h4>
                        <center> PRESENSI ASISTEN DOSEN 2022 </center>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <center>Your response has been recorded</center>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <a href="/EAbsen/<?= $absen->id ?>">Edit your response</a>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>