<?php
use App\Customer;
use App\User;
?>

<!--Extend navbar & footer-->
@extends('layouts.system')

<!--title name of current page-->
@section('title' ,'My Action Records')

<!--Content of this page-->
@section('content')

<div class="content-wrapper pt-4">

    @if($actions->isEmpty())
        <!--empty data-->
        <div class="mt-3">
            <div class="row">
                <div class="col-lg-6 ">
                    <img class="img-fluid" src="{{asset('/dist/img/empty.png')}}" alt="no customers">
                </div>
                <div class="col-lg-6  d-flex flex-column justify-content-center align-items-center text-bold text-danger p-3">
                    <p>There are no actions yet !!</p>
                </div>
            </div>
        </div>
    @else
    <div class="row">
        @foreach($actions as $action)
        <!-- Main content -->
        <section class="content col-lg-8 m-auto">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card text-center">
                        <div class="card-header">
                            <?php
                                $customer_id = $action->customer_id;
                                $customer = Customer::find($customer_id);
                                $first_name = $customer->first_name;
                                $last_name = $customer->last_name;
                                $full_name = $first_name.' '.$last_name ;
                                echo '<h3 class="card-title text-primary">I Have '.$action->action_type.' With '.$full_name.'</h3>';
                            ?>
                            

                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            
                            </div>
                        </div>
                        <div class="card-body ">
                            {{$action->desc}}
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            At {{$action->created_at}}
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
        @endforeach
    </div>
    @endif
    

</div>
    

@endsection