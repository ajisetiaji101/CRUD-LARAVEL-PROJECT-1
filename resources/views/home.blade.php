<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" href="{{ asset('assets/img/logo.png') }}"type="image/x-icon">

    <title>PT. BANK SUMSEL BABEL</title>
  </head>
  <body>
    {{-- Navbar --}}
    <div style="background-image: url('{{ asset('assets/img/background3.jpg') }}');  background-repeat: no-repeat; background-size:cover" class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark b g-transparent fixed-top p-3">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto" href="#"><img src="{{ asset('assets/img/logosumselbabel.png') }}" width="160px"></a>
                @auth
                <div class="d-flex">
                  <a href="dashboard" class="btn btn-primary" type="submit">DASHBOARD</a>
                </div>
                @else
                <div class="d-flex">
                  <a href="login" class="btn btn-primary" type="submit">LOGIN</a>
               </div>
                @endauth
              </div>
            </div>
          </nav>
          <div class="container">
              <div class="row min-vh-100 text-center align-items-center">
                  <div class="col">
                      <h1 class="text-primary fw-bolder">SISTEM INFORMASI DATA NASABAH</h1>
                      <h1 class="text-primary fw-bolder lh-base">PT. BANK SUMSEL BABEL</h1>
                  </div>
              </div>
          </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>