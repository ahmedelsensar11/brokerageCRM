@extends('layouts.system')

@section('title' , 'new customer')

@section('content')

    <div class="content-wrapper ">
        <div class=" pt-4">
            <!-- general form elements -->
            <div class="w-75 p-0 container  card card-primary">
                <div class="card-header">
                    <h3 class="card-title">New Customer</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{url('/customer/store')}}">
                    @csrf
                    <div class="card-body">

                        <!-- name -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="firstname">First name</label>
                                <input name="first_name" type="text" class="form-control" id="firstname" placeholder="First Name">
                                @error('first_name')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>                            
                            <div class="col-lg-6">
                                <label for="lastname">Last name</label>
                                <input name="last_name" type="text" class="form-control" id="lastname" placeholder="Last Name">
                                @error('last_name')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- email -->
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="x123@gmail.com">
                            @error('email')
                            <strong class=" text-danger">
                                <i class="fas fa-exclamation-circle"></i> {{$message}}
                            </strong>
                            @enderror
                        </div>

                        <!-- address -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="address1">Address Line 1</label>
                                <input name="address1" type="text" class="form-control" placeholder="23, Tahreer st" id="address1" >
                                @error('address1')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>                            
                            <div class="col-lg-6">
                                <label for="address2">Address Line 2</label>
                                <input name="address2" type="text" class="form-control" placeholder="Level 3" id="address2" >
                                @error('address2')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- city & country -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="city">City</label>
                                <input name="city" type="text" class="form-control" placeholder="Cairo" id="city" >
                                @error('city')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>  
                            <div class="col-lg-6">
                                <label for="country">Country</label>
                                <input name="country" type="text" class="form-control" placeholder="Egypt" id="country" >
                                @error('country')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- postal_code & phone -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="postalcode">Postal Code</label>
                                <input name="postal_code" type="text" placeholder="xxxxx" class="form-control" id="postalcode" >
                                @error('postal_code')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                            </div>   

                            <div class="col-lg-6">
                                <label for="phone">Phone Number</label>
                                <input name="phone" type="text" class="form-control" placeholder="(+xx)-xxx xxx xxxx" id="phone" >
                                @error('phone')
                                <strong class=" text-danger">
                                    <i class="fas fa-exclamation-circle"></i> {{$message}}
                                </strong>
                                @enderror
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">New Customer</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
            
@endsection