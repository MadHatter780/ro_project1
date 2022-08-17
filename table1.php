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
          <a class="nav-link active" href="table1.php">Table 1</a>
          <a class="nav-link" href="login.php">login</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid" style="background-image: url('https://source.unsplash.com/900x400/?programmer'); height: 400px;">
    <div class="container">
      <h1 class="display-4" style="color: white;">Tabel Data</h1>
      <p class="lead" style="color: white;">Silahkan di Cek datanya</p>
    </div>
  </div>

  <div class="container">

    <div class="row mb-4 mt-4 ">
      <div class="col-sm-4">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="bi bi-search"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <table class="table table-hover">
          <thead class="table-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Image Sampul</th>
              <th scope="col">Nama Buku</th>
              <th scope="col">Sumber Buku</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><img src="https://source.unsplash.com/random/120x72/" alt="menggunakan api dari unsplash">
              </td>
              <td>Random BOOK 11212</td>
              <td> unsplash</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><img src="https://source.unsplash.com/120x72/?web" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 1121</td>
              <td>unsplash</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><img src="https://source.unsplash.com/120x72/?programmer" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 112</td>
              <td>unsplash</td>
            </tr>

            <tr>
              <th scope="row">4</th>
              <td><img src="https://source.unsplash.com/120x72/?night" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 10</td>
              <td>unsplash</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><img src="https://source.unsplash.com/120x72/?whale" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 12</td>
              <td>unsplash</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td><img src="https://source.unsplash.com/120x72/?blue" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 122</td>
              <td>unsplash</td>
            </tr>

            <tr>
              <th scope="row">7</th>
              <td><img src="https://source.unsplash.com/120x72/?night" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 10</td>
              <td>unsplash</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><img src="https://source.unsplash.com/120x72/?flag" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 12</td>
              <td>unsplash</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td><img src="https://source.unsplash.com/120x72/?hero" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 122</td>
              <td>unsplash</td>
            </tr>

            <tr>
              <th scope="row">10</th>
              <td><img src="https://source.unsplash.com/120x72/?wolf" alt="menggunakan api dari unsplash"></td>
              <td>Random BOOK 122</td>
              <td>unsplash</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>