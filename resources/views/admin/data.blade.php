@extends("admin.partials.main")
@section('container')
<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <h2>Data <b>Karyawan</b></h2>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Firstmame</th>
                            <th scope="col">Date Of Birth</th>
                            <th scope="col">Place Of Birth</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Religion</th>
                            <th scope="col">Marital Status</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Permanent Address</th>
                            <th scope="col">Coressponden Address</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @foreach ($datas as $data )
                        <tr>
                            <th scope="row">{{ $no++; }}</th>
                            <td>{{ $data->firstname }}</td>
                            <td>{{ $data->dob }}</td>
                            <td>{{ $data->birth }}</td>
                            <td>{{ $data->sex }}</td>
                            <td>{{ $data->religion }}</td>
                            <td>{{ $data->maritalstatus }}</td>
                            <td>{{ $data->nationality }}</td>
                            <td>{{ $data->permanentaddress }}</td>
                            <td>{{ $data->corresponaddress }}</td>
                            <td>{{ $data->mobilenumber }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a class="badge bg-success" href="data/{{ $data->id }}/edit"><i class="fas fa-edit text-white-3"></i></a>
                                <a class="badge bg-danger" href="data/{{ $data->id }}"><i class="fas fa-trash text-white"></i></a></td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
