<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="navbar-brand" href="index.php">Add</a>
          <a class="nav-link" href="table1.php">Table 1</a>
          <a class="nav-link" href="login.php">login</a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container  mt-4">
    <div class="row">
      <h2 class="text-center"><i class="bi bi-book-fill"></i> ADD NEW BOOK</h2>
      <?php if ($_SESSION["pesan"]) : ?>
        <div class="alert alert-success" role="alert">
          <i class="bi bi-wrench-adjustable-circle"></i> <?= $_SESSION["pesan"]; ?> <a href="#" class="alert-link">
            <?php $_SESSION["pesan"] = ''; ?>
        </div>
      <?php endif ?>
      <div class="card">
        <div class="card-body">
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-patch-question"></i>
          </button>
          <div class="col-sm-4 offset-4 mt-4 text-center">
            <form action="" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" id="" aria-describedby="nama">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">No Buku</label>
                <input type="number" class="form-control" id="" aria-describedby="nama">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Jenis Buku</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Jenis Buku</option>
                  <option value="1">Manga</option>
                  <option value="2">Mahnwa</option>
                  <option value="3">Novel</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Status Usia Buku</label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Lama
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Baru
                  </label>
                </div>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Tanggal Masuk </label>
                <input type="date" class="form-control" id="" aria-describedby="nama">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Foto </label>
                <input type="file" class="form-control" id="" aria-describedby="nama">
              </div>
              <button type="submit" class="btn btn-primary"><i class="bi bi-door-open"></i>
                Submit</button>
              <button type="reset" class="btn btn-danger"><i class="bi bi-arrow-clockwise"></i>
                Reset</button>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Semua gambar menggunankan api dari unsplash untuk mmudahkan upload file dan memperkecil ukuran
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">OKAY</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>