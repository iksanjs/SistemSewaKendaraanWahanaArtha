<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ArthaRide</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/admin/select2/dist/css/select2.min.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">

                                <div class="form-group">
									<input id="name" type="text" placeholder="Name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
                                </div>
								
								<div class="form-group">
									<input id="username" type="text" placeholder="Username" class="form-control form-control-user @error('username') is-invalid @enderror" name="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>

									@error('username')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
                                </div>
								
								<div class="form-group">
									<select id="role" class="form-control form-control-user{{ $errors->has('role') ? ' is-invalid' : ''}}" name="role" value="{{ old('role') }}" required autofocus>
										<option value="Admin" selected>Admin</option>
										<option value="Pengurus">Pengurus</option>
										<option value="Akuntan">Akuntan</option>
									</select>
                                    @if ($errors->has('role'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('role') }}</strong>
										</span>
									@endif
                                </div>
								
								<div class="form-group">
									<input id="password" type="password" placeholder="Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password")>

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
                                </div>
								
								<div class="form-group">
									<input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password">
                                </div>
								
								<button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="#">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Select2 -->
<script src="{{ asset('/admin/select2/dist/js/select2.full.min.js') }}"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
</body>

</html>