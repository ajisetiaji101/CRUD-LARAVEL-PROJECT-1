@extends("admin.partials.main")
@section('container')
@foreach ($result as $data)        
  <div class="mb-3 row">
    <label for="firstname" class="col-sm-4 col-form-label">Firstname</label>
    <div class="col-sm-8">
      <span>{{ $data->firstname }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="dob" class="col-sm-4 col-form-label">Date Of Birth</label>
    <div class="col-sm-8">
      <span>{{ $data->dob }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="birth" class="col-sm-4 col-form-label">Place Of Birth</label>
    <div class="col-sm-8">
        <span>{{ $data->birth }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="sex" class="col-sm-4 col-form-label">Sex</label>
    <div class="col-sm-8">
        <span>{{ $data->sex }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="religion" class="col-sm-4 col-form-label">Religion</label>
    <div class="col-sm-8">
        <span>{{ $data->religion }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="maritalstatus" class="col-sm-4 col-form-label">Marital Status</label>
    <div class="col-sm-8">
        <span>{{ $data->maritalstatus }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nationality" class="col-sm-4 col-form-label">Nationality</label>
    <div class="col-sm-8">
      <span>{{ $data->nationality }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="permanentaddress" class="col-sm-4 col-form-label">Permanent Address</label>
    <div class="col-sm-8">
      <span>{{ $data->permanentaddress }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="corresponaddress" class="col-sm-4 col-form-label">Correspondence Address</label>
    <div class="col-sm-8">
      <span>{{ $data->corresponaddress }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="mobilenumber" class="col-sm-4 col-form-label">Mobile Number</label>
    <div class="col-sm-8">
        <span>{{ $data->mobilenumber }}</span>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
        <span>{{ $data->email }}</span>
    </div>
  </div>
  <p>
      <a class="btn btn-danger" href="data/{{ $data->id }}/edit">Edit</a>
  </p>
  @endforeach
@endsection
