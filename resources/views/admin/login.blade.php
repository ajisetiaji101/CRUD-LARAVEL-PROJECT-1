<!DOCTYPE html>
<html lang="en">

<head>

	<title>DashboardKit Bootstrap 5 Admin Template</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">


	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('admin/images/favicon.svg') }}" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/fonts/material.css') }}">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" id="main-style-link">


</head>
<body>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper" style="background-image: url('{{ asset('assets/img/background3.jpg') }}');  background-repeat: no-repeat; background-size:cover">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						@if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endif
                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session('loginError') }}
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endif
						  @if(session()->has('error'))
						  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							{{ session('error') }}
							  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
							</div>
							@endif
						<h4 class="mb-3 f-w-400">LOGIN</h4>
                        <form action="login" method="post">
							@csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address">
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
							<p class="mb-0 text-muted">Don’t have an account? <a href="/register" class="f-w-400">Signup</a></p>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('admin/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/pcoded.min.js') }}"></script>
</body>

</html>