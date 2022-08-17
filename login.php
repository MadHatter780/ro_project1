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
          <a class="nav-link" href="index.php">Add</a>
          <a class="nav-link" href="table1.php">Table 1</a>
          <a class="nav-link active" href="login.php">login</a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container text-center mt-4">
    <div class="row">
      <h2>Login</h2>
      <div class="col-sm-4 offset-4 mt-4">
        <div class="card">
          <div class="card-body">
            <form action="login_data.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id="" name="nama" aria-describedby="nama" placeholder="contoh @gmail.com">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="nama" placeholder="terhidden">
              </div>
              <?php if ($_SESSION["pesan"]) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= $_SESSION["pesan"]; ?> <a href="#" class="alert-link">
                    <?php $_SESSION["pesan"] = ''; ?>
                </div>
              <?php endif ?>
              <button type="submit" class="btn btn-primary"><i class="bi bi-door-open"></i>
                Login</button>
              <button type="reset" class="btn btn-danger"><i class="bi bi-arrow-clockwise"></i>
                Reset</button>
              <br>
              <p class="mt-2">Tidal Punya akun? &nbsp;<span class="badge bg-primary">Sign In</span></p>




            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>