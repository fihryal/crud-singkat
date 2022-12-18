<?php
require 'function.php';

$reseps = query("SELECT * FROM resep");

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#tambah">
        tambah resep makanan
    </button>

    <!-- Modal -->
    <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="post" action="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="gambar" class="col-form-label">gambar:</label>
                            <input type="text" name="gambar" class="form-control" id="gambar">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">nama:</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-form-label">keterangan:</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-form-label">bahan:</label>
                            <input type="text" name="bahan" class="form-control" id="bahan">
                        </div>
                        <div class="form-group">
                            <label for="cara_masak" class="col-form-label">cara_masak:</label>
                            <input type="text" name="cara_masak" class="form-control" id="cara_masak">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn">Understood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container d-flex">
        <div class="row">

            <?php $no=1 ?>
            <?php foreach ($reseps as $resep): ?>
            <div class="col">
                <div class="card mt-5" style="width: 18rem;">
                    <p class="text-end visually-hidden"><?= $resep["id"]; ?> </p>
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title badge bg-primary text-wrap fs-7" style="width: 6rem;">
                            <?= $resep["nama"]; ?>
                        </h5>
                        <p class="card-text"><?= $resep["keterangan"]; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p class="text-muted">bahan yang harus di siapkan:</p>
                            <p class="overflow-auto" style=" height: 120px;"><?= $resep["bahan"]; ?></p>
                        </li>
                        <li class="list-group-item">
                            <p class="text-muted">Cara memasak:</p>
                            <p class="overflow-auto" style=" height: 120px;"><?= $resep["cara_masak"]; ?></p>
                        </li>
                    </ul>
                    <div class="card-body d-flex justify-content-around">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah">
                            Ubah
                        </button>
                        <a class="btn btn-danger" href="hapus.php?id=<?= $resep["id"]; ?>">Hapus</a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="ubah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Mengubah data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="<?= $resep["id"]; ?>">
                                    <div class="form-group">
                                        <label> gambar : </label>
                                        <input type="hidden" name="gambarlama" value="<?= $gambar["gambar"]; ?>">
                                        <img width="50" height="50" src="img/<?= $resep["gambar"]; ?>" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Upload gambar</label>
                                        <input type="file" name="gambar" id="gambar" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label for="uketerangan" class="col-form-label">keterangan:</label>
                                        <input type="text" name="uketerangan" class="form-control" id="uketerangan"
                                            value="<?= $resep["keterangan"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="unama" class="col-form-label">nama:</label>
                                        <input type="text" name="unama" class="form-control" id="unama"
                                            value="<?= $resep["nama"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ubahan" class="col-form-label">bahan:</label>
                                        <input type="text" name="ubahan" class="form-control" id="ubahan"
                                            value="<?= $resep["bahan"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ucara_masak" class="col-form-label">cara masak:</label>
                                        <input type="text" name="ucara_masak" class="form-control" id="ucara_masak"
                                            value="<?= $resep["cara_masak"]; ?>">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn mb-2 btn-secondary"
                                        data-dismiss="modal">Keluar</button>
                                    <button type="submit" name="btnUbahData"
                                        class="btn mb-2 btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>