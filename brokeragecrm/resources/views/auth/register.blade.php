<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRM | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>

<body class="hold-transition p-0 bg-white login-page">
    <div class="container p-0">
        <div class="row">

            <div class="col-lg-6">
                <div class="account-head" >
                    <img class="img-fluid" src="{{asset('dist/img/brok2.png')}}" alt="">
                </div>
            </div>

            <!-- login form -->
            <div class="col-lg-6 my-auto">
                <div class="login-box m-auto">
                    <div class="login-logo">
                        <a href="{{url('/')}}"><b>Brokerage | CRM</b></a>
                    </div>
                    <!-- /.login-logo -->
                    <div class="card">

                        <!-- Login process -->
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Register a new membership</p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- full name-->
                                <div class="row">
                                
                                    <!-- first name-->
                                    <div class="col-lg-6 input-group mb-3 form-group ">

                                        <input id="firstname" type="text" placeholder="{{ __('First Name') }}" class="form-control @error('firstname') is-invalid @enderror" 
                                        name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                            </div>
                                        </div>


                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <!-- last name-->
                                    <div class="col-lg-6 input-group mb-3 form-group ">

                                        <input id="lastname" type="text" placeholder="{{ __('Last Name') }}" class="form-control @error('lastname') is-invalid @enderror" 
                                        name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                            </div>
                                        </div>


                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                </div>
                                
                                <!-- email-->
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                    placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <!-- password-->
                                <div class="input-group mb-3 ">
                                    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" required placeholder="Enter Password"  autocomplete="current-password">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>

                                <!--confirm password-->
                                <div class=" input-group mb-3">
                                    <input id="password-confirm" type="password" class="form-control" 
                                    name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- position-->
                                <div class="input-group mb-3">
                                    <input id="position" type="text" name="position" class="form-control @error('position') is-invalid @enderror" 
                                    placeholder="{{ __('Position') }}" value="{{ old('position') }}" required autocomplete="position" autofocus>
                                    
                                    <div class="input-group-append">
                                        <div class="input-group-text">                                        
                                            <span class="fas fa-briefcase"></span>
                                        </div>
                                    </div>
                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- address-->
                                <div class="input-group mb-3">
                                    <input id="address" type="text" name="address" class="form-control @error('address') is-invalid @enderror" 
                                    placeholder="{{ __('Your Address') }}" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                    </div>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- submit-->
                                <div class="row">
                                    <div class="col-8 d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="{{ url('/login')}}" class="text-center">I already have a membership</a>
                                        </p>
                                    </div>

                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </form>

                            
                        </div>
                        <!-- /.register-card-body -->

                    </div>
                </div>
            </div>

        </div>
    </div>    

<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
