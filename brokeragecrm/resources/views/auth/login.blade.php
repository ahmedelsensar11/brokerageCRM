<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRM | Log in</title>
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
                            <p class="login-box-msg">Login to start your session</p>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
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
                                
                                <div class="input-group mb-3 form-group ">
                                    
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
                                

                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                        <input  class="form-check-input" type="checkbox" name="remember" 
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                        </div>
                                    </div>

                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </form>

                            <!--
                            <p class="mb-1">
                                <a href="forgot-password.html">I forgot my password</a>
                            </p>
                            -->
                            <p class="mb-0">
                                <a href="{{ url('/register')}}" class="text-center">Register a new membership</a>
                            </p>
                        </div>
                        <!-- /.login-card-body -->

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
