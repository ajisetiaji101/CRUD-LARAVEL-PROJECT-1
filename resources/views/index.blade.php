<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <title>DATA KARYAWAN</title>
  </head>
  <body>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-6">
            <h1 class="text-center mb-3">SISTEM INFORMASI KARYAWAN</h1>
            <form>
              <div class="mb-3 row">
                <label for="firstname" class="col-sm-4 col-form-label">Firstname</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="firstname">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="dob" class="col-sm-4 col-form-label">Date Of Birth</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="dob">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="birth" class="col-sm-4 col-form-label">Place Of Birth</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="birth">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="sex" class="col-sm-4 col-form-label">Sex</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="sex">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="religion" class="col-sm-4 col-form-label">Religion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="religion">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="maritalstatus" class="col-sm-4 col-form-label">Marital Status</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="maritalstatus">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="nationality" class="col-sm-4 col-form-label">Nationality</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nationality">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="permanentaddress" class="col-sm-4 col-form-label">Permanent Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="permanentaddress">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="corresponaddress" class="col-sm-4 col-form-label">Correspondence Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="corresponaddress">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="mobilenumber" class="col-sm-4 col-form-label">Mobile Number</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="mobilenumber">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
              <button class="btn btn-warning">Reset</button>
              <button class="btn btn-danger">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>