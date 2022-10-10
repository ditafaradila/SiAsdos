<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
    <!-- CONTAINER -->
    <div class="container">
        <!-- CARD -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                Data Pengumuman
            </div>
            <div class="card-body">
                <!-- LOKASI TEXT PENCARIAN -->
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="katakunci" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
                <!-- MODAL -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah Data Pengumuman
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Pengumuman</h5>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- KALAU ERROR -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
                                </div>
                                <!-- KALAU SUKSES -->
                                <div class="alert alert-primary sukses" role="alert" style="display: none;">
                                </div>
                                <!-- FORM INPUT DATA -->
                                <input type="hidden" id="inputId">
                                <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNama">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputNPM" class="col-sm-2 col-form-label">NPM</label>
                                    <div class="col-sm-10">
                                        <input type="num" class="form-control" id="inputNPM">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputMK" class="col-sm-2 col-form-label">MK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputMK">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputSemester" class="col-sm-2 col-form-label">SMT</label>
                                    <div class="col-sm-10">
                                        <select id="inputSemester" class="form-select">
                                            <option value="semester1">Semester 1</option>
                                            <option value="semester3">Semester 3</option>
                                            <option value="semester5">Semester 5</option>
                                            <option value="semester7">Semester 7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select id="inputKelas" class="form-select">
                                            <option value="KelasA">Kelas A</option>
                                            <option value="KelasB">Kelas B</option>
                                            <option value="KelasC">Kelas C</option>
                                            <option value="KelasD">Kelas D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Mata Kuliah</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <td>1</td>
                        <td>Nesa</td>
                        <td>2017051009</td>
                        <td>Basis Data</td>
                        <td>Semester 1</td>
                        <td>Kelas A</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                            <!--disini-->
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>


                    </tbody>
                </table>
                <?php
                // $linkPagination = $pager->links();
                // $linkPagination = str_replace('<li class="active">', '<li class="page-item active">', $linkPagination);
                // $linkPagination = str_replace('<li>', '<li class="page-item">', $linkPagination);
                // $linkPagination = str_replace("<a", "<a class='page-link'", $linkPagination);
                // echo $linkPagination;
                ?>
            </div>
        </div>
    </div>
    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function hapus($id) {
            var result = confirm('Yakin mau melakukan proses delete');
            if (result) {
                window.location = "<?php echo site_url("pengumuman/hapus") ?>/" + $id;
            }
        }

        function edit($id) {
            $.ajax({
                url: "<?php echo site_url("pengumuman/edit") ?>/" + $id,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.id != '') {
                        $('#inputId').val($obj.id);
                        $('#inputNama').val($obj.nama);
                        $('#inputNPM').val($obj.npm);
                        $('#inputMK').val($obj.mk);
                        $('#inputSemester').val($obj.semester);
                        $('#inputKelas').val($obj.kelas);
                    }
                }

            });
        }

        function bersihkan() {
            $('#inputId').val('');
            $('#inputNama').val('');
            $('#inputNPM').val('');
            $('#inputMK').val('');
        }
        $('.tombol-tutup').on('click', function() {
            if ($('.sukses').is(":visible")) {
                window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
            }
            $('.alert').hide();
            bersihkan();
        });

        $('#tombolSimpan').on('click', function() {
            var $id = $('#inputId').val();
            var $nama = $('#inputNama').val();
            var $email = $('#inputNPM').val();
            var $bidang = $('#inputMK').val();
            var $alamat = $('#inputSemester').val();
            var $alamat = $('#inputKelas').val();

            $.ajax({
                url: "<?php echo site_url("pengumuman/simpan") ?>",
                type: "POST",
                data: {
                    id: $id,
                    nama: $nama,
                    npm: $npm,
                    mk: $mk,
                    semester: $semester,
                    kelas: $kelas
                },
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.sukses == false) {
                        $('.sukses').hide();
                        $('.error').show();
                        $('.error').html($obj.error);
                    } else {
                        $('.error').hide();
                        $('.sukses').show();
                        $('.sukses').html($obj.sukses);
                    }
                }
            });
            bersihkan();

        });
    </script>
</body>

</html>

<?= $this->endSection() ?>