<?php
use App\Customer;
?>
<!--Extend navbar & footer-->
@extends('layouts.system')

<!--title name of current page-->
@section('title' ,'Customer Details')

<!--Content of this page-->
@section('content')

    <div class="content-wrapper p-2 row">
        <div class="m-auto col-lg-6">
            <!-- About customer Box -->
            <div class=" card card-primary">
            
                <div class="card-header">
                    <h3 class="card-title">About Customer</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Name</strong>
                            <p class="text-muted">
                                {{$customer->first_name}} {{$customer->last_name}}
                            </p>
                        </div>
                        <div class="col-lg-6">
                        
                            <strong>Phone Number</strong>
                            <p class="text-muted">{{$customer->phone}}</p>
                        </div>

                        <div class="col-lg-6">

                            <strong>Email</strong>
                            <p class="text-muted">{{$customer->email}}</p>

                        </div>
                        <div class="col-lg-6">

                            <strong>Status</strong>
                            <p class="text-muted">{{$customer->status}}</p>

                        </div>
                        <div class="col-lg-6">

                            <strong></i> Location</strong>
                            <p class="text-muted">{{$customer->address1}} ,{{$customer->address2}}
                                </br>{{$customer->city}} ,{{$customer->country}}
                            </p>
    
                        </div>
                        <div class="col-lg-6">

                            <strong>Joind At</strong>
                            <p class="text-muted">{{$customer->created_at}}</p>

                        </div>

                        <div class="col-lg-12">
                            <hr>
                        </div>
                        
                    </div>

                </div>
            
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

@endsection

