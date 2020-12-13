@extends('layouts.system')

@section('title' , 'new employee')

@section('content')

    <div class="content-wrapper ">
        <div class=" pt-4">
            <!-- general form elements -->
            <div class="w-75 p-0 container  card card-primary">
                <div class="card-header">
                    <h3 class="card-title">New Employee</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                   <form class="p-3" method="POST" action="{{ url('/employee/store') }}">
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
                            <!-- add -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('New Employee') }}</button>
                            </div>
                            <!-- /.col -->
                        </div>

                    </form>

            </div>
            <!-- /.card -->
        </div>
    </div>
            
@endsection