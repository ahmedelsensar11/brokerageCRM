<?php
use App\Customer;
?>
<!--Extend navbar & footer-->
@extends('layouts.system')

<!--title name of current page-->
@section('title' ,'Add Action')

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

                        <div class="col-lg-12">

                            <strong>Email</strong>
                            <p class="text-muted">{{$customer->email}}</p>

                        </div>
                        <div class="col-lg-12">

                            <strong></i> Location</strong>
                            <p class="text-muted">{{$customer->address1}} ,{{$customer->address2}}
                                </br>{{$customer->city}} ,{{$customer->country}}
                            </p>
    
                        </div>

                        <div class="col-lg-12">
                            <hr>
                        </div>
                        
                    </div>

                    <form class="form-group" method="post" action="{{url('/employee/recordAction/'.$customer->id)}}">
                        @csrf
                        <label>Add Action</label>
                        <select name="action_type" class="form-control select2bs4 mb-3" style="width: 100%;">
                            <option>No Action</option>
                            <option>Call</option>
                            <option>Visit</option>
                            <option>Follow</option>
                        </select>
                        <textarea class="form-control" name="action_desc"  rows="3" placeholder="Descripe This Action..."></textarea>
                        <button type="submit" class="btn btn-danger my-2">Add Action</button>
                    </form>
                </div>
            
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

@endsection

