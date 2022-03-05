<div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Karyawan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/tambah" method="POST">
                    @csrf
                    <div class="mb-3 row">
                      <label for="firstname" class="col-sm-4 col-form-label">Firstname</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="firstname" name="firstname" @error('firtname') is-invalid @enderror value="{{ old('firtname') }}" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputPassword" class="col-sm-4 col-form-label" @error('password') is-invalid @enderror >Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="dob" class="col-sm-4 col-form-label">Date Of Birth</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="dob" name="dob" @error('dob') is-invalid @enderror value="{{ old('dob') }}" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="birth" class="col-sm-4 col-form-label">Place Of Birth</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="birth" name="birth" @error('birth') is-invalid @enderror value="{{ old('birth') }}" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="sex" class="col-sm-4 col-form-label">Sex</label>
                      <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" id="sex" name="sex" @error('sex') is-invalid @enderror value="{{ old('sex') }}">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="religion" class="col-sm-4 col-form-label">Religion</label>
                      <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" id="religion" name="religion" @error('religion') is-invalid @enderror value="{{ old('religion') }}">
                          <option value="moeslim">Moeslim</option>
                          <option value="hindu">Hindu</option>
                          <option value="kristen">Katolik</option>
                          <option value="buddha">Buddha</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="maritalstatus" class="col-sm-4 col-form-label">Marital Status</label>
                      <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" id="maritalstatus" name="maritalstatus" @error('maritalstatus') is-invalid @enderror value="{{ old('maritalstatus') }}">
                          <option value="single">Single</option>
                          <option value="married">Married</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="nationality" class="col-sm-4 col-form-label">Nationality</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nationality" name="nationality"@error('normality') is-invalid @enderror value="{{ old('normality') }}" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="permanentaddress" class="col-sm-4 col-form-label">Permanent Address</label>
                      <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="permanentaddress" name="permanentaddress" @error('permanentaddress') is-invalid @enderror required>{{ old('permanentaddress') }}</textarea>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="corresponaddress" class="col-sm-4 col-form-label">Correspondence Address</label>
                      <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="corresponaddress" name="corresponaddress" @error('corresponaddress') is-invalid @enderror required>{{ old('corresponaddress') }}</textarea>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="mobilenumber" class="col-sm-4 col-form-label">Mobile Number</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="mobilenumber" name="mobilenumber" @error('mobilenumber') is-invalid @enderror value="{{ old('mobilenumber') }}" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="email" class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" @error('email') is-invalid @enderror value="{{ old('email') }}" required>
                      </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn  btn-primary">Save changes</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>