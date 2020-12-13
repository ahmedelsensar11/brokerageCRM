<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Brokerage | CRM</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition layout-top-nav">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                <div class="container">
                    <!-- Brand Logo -->
                    <a href="#" class="navbar-brand">
                        <img src="dist/img/brokerage-logo.png" alt="company Logo" class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <span class="brand-text font-weight-light">Brokerage</span>
                    </a>
                    
                    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" 
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        
                        @if (Route::has('login'))
                            <!-- Authintication links -->
                            <ul class="navbar-nav ml-auto"> 
                                @auth
                                <li class="nav-item d-flex align-items-center">
                                    <span class="nav-link">Welcome {{Auth::user()->first_name}}</span class="">
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="nav-link text-primary">Home</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a href="{{ url('/login') }}" class="nav-link">Login</a>
                                </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ url('/register') }}" class="nav-link">Register</a>
                                    </li>
                                    @endif

                                @endauth
                                
                            </ul>
                        @endif                  
                        
                    </div>

                </div>
            </nav>
            <!-- /.navbar -->

            <!-- Content charts -->
            <div class="content-wrapper">
                    
                <!-- Main content -->
                <div class="content">
                    <div class="pt-5">
                        <div class="container">
                            <div class="row">
                                <!-- /.col-md-6 -->
                                <div class="col-lg-6">
                                    <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title m-0"><a href="https://brokerage-insurance.com/en">BROKERAGE INSURANCE</a></h5>
                                    </div>
                                    <div class="card-body">

                                        <p class="card-text">Brokerage is a Fast Strategic Growing Insurance Brokerage that has a successful long track record in serving all insurance needs through its current founder Mr. Ahmad Nabil from 2008 to 2019.</p>
                                    </div>
                                    </div>

                                    <div class="card card-primary card-outline d-flex flex-column align-items-center">

                                        <div class="card-header">
                                            <h5 class="card-title m-0">Brokerage | CRM</h5>
                                        </div>
                                        <div class="card-body">

                                            <p class="card-text">A Customer Relationship Management (CRM) system helps manage customer data. It supports sales management, delivers actionable insights, integrates with social media and facilitates team communication. Cloud-based CRM systems offer complete mobility and access to an ecosystem of bespoke apps.</p>
                                        </div>

                                    </div>
                                </div>
                                
                                <!-- /.col-md-6 -->
                                <div class="col-lg-6">
                                    <img class="img-fluid" src="{{asset('/dist/img/invest.png')}}" alt="no customers">                                
                                </div>
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-charts -->

            <!-- /.content-wrapper -->
            <footer class="main-footer d-flex justify-content-center">
                <strong>Copyright &copy; ahmelsens11@gmail.com</strong>
            </footer>

        </div>
        <!-- ./wrapper -->


        <!-- jQuery -->
        <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
    </body>

</html>
