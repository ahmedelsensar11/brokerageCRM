<?php
use App\Customer;
use App\User;
?>
<!--Extend navbar & footer-->
@extends('layouts.system')

<!--title name of current page-->
@section('title' ,'home')

<!--Content of this page-->
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-2">
   
  
    <!--statectics-->
    <!-- Main content -->
    <section class="content px-0 pt-2">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$Followed}}</h3>

                <p>Followed Customers</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              
              <div class="inner">
                <h3>{{$Visited}}</h3>

                <p>Visited Customers</p>
              </div>
              <div class="icon">
                <i class="fas fa-handshake"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$Called}}</h3>

                <p>Called Customers</p>
              </div>
              <div class="icon">
              <i class="fas fa-comment-dots"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$no_action}}</h3>

                <p>Customers With No Action</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-times"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @if(isset($customers) == NULL)

    <!--empty data-->
    <div class="mt-3">
        <div class="row">
            <div class="col-lg-6 ">
                <img class="img-fluid" src="{{asset('/dist/img/empty.png')}}" alt="no customers">
            </div>
            <div class="col-lg-6  d-flex justify-content-center align-items-center text-bold text-danger p-3">
                No Customers Yet !!
            </div>
        </div>
    </div>

    @else    
    
    <!--main table-->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Customers Data Table</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th>Customer Name</th>
              <th>Customer E-Mail</th>
              <th>Phone Number</th>
              <th class='text-center'>Status</th>
              <th>Assigned To</th>
              <th>Details</th>
              
            </tr>
          </thead>

          <tbody>

            @foreach($customers as $customer)
            <tr>
              <td>{{$customer->first_name}} {{$customer->last_name}}</td>
              <td>{{$customer->email}}</td>
              <td>{{$customer->phone}}</td>

              @if($customer->status == 'Followed')
              <td class='text-center'><span class='badge badge-pill badge-success p-2'>Followed</span></td>
              @elseif($customer->status == 'Called')
              <td class='text-center'><span class='badge badge-pill badge-warning py-2 px-3'>Called</span></td>
              @elseif($customer->status == 'Visited')
              <td class='text-center'><span class='badge badge-pill badge-info py-2 px-3'>Visited</span></td>
              @else
              <td class='text-center'><span class='badge badge-pill badge-danger p-2'>{{$customer->status}}</span></td>
              @endif

              <!-- employee of this customer-->
              <!-- find him by relation one to many inverse-->
              <td>
                <?php
                  if($customer->assigned_to == NULL)
                  {
                    echo "<span class='badge badge-pill badge-danger px-3 py-2'>NULL</span>";
                  }
                  else{
                    
                  $employee = User::where('id' ,$customer->assigned_to)->first();
                  $firstName = $employee->first_name;
                  $lastName = $employee->last_name;
                  $fullName = $firstName.' '.$lastName ;
                  echo $fullName;

                  }
                ?>
              </td>
              
              <td>
                <a class="btn btn-primary" href="{{url('/customer/show/'.$customer->id)}}" role="button"><i class='fas fa-eye'></i> Details</a>
              </td>
              
              
            </tr>
            @endforeach
          
          </tbody>
          
          <tfoot>
            <tr>
              <th>Customer Name</th>
              <th>Customer E-Mail</th>
              <th>Phone Number</th>
              <th class='text-center'>Status</th>
              <th>Assigned To</th>
              <th>Details</th>
              
            </tr>
          </tfoot>

        </table>
      </div>
      <!-- /.card-body -->
    </div>

    @endif

  </div>
  <!-- End Home -->

@endsection

