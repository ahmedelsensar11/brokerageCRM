<?php
use App\Customer;
?>
<!--Extend navbar & footer-->
@extends('layouts.system')

<!--title name of current page-->
@section('title' ,'Assign')

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
                    <strong>Name</strong>

                    <p class="text-muted">
                        {{$customer->first_name}} {{$customer->last_name}}
                    </p>

                    <hr>

                    <strong></i> Location</strong>

                        <p class="text-muted">{{$customer->address1}} ,{{$customer->address2}}
                        </br>{{$customer->city}} ,{{$customer->country}}
                        </p>
                    
                    <hr>

                    <strong>Email</strong>

                    <p class="text-muted">{{$customer->email}}</p>

                    <hr>

                    <strong>Phone Number</strong>

                    <p class="text-muted">{{$customer->phone}}</p>

                    <hr>
                    <form class="form-group" method="post" action="{{url('/customer/update/' .$customer->id)}}">
                        @csrf
                        <label>Assign To</label>
                        <select name="employee" class="form-control select2bs4" style="width: 100%;">
                        <option class="selected"></option>
                        @foreach($employees as $employee)    
                            <option>{{$employee->first_name}} {{$employee->last_name}} - ID:{{$employee->id}} </option>
                        @endforeach    
                        </select>
                        <button type="submit" class="btn btn-danger my-2">Assign</button>
                    </form>
                </div>
            
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

@endsection

