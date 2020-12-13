<?php

namespace App\Http\Controllers;


use App\Customer;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //all customers
    public function index()
    {
        //get all customers
        $customers = Customer::orderBy('created_at' , 'desc')->get();
        $Called = Customer::where('status' , 'Called')->count();
        $Visited = Customer::where('status' , 'Visited')->count();
        $Followed = Customer::where('status' , 'Followed')->count();
        $no_action = Customer::where('status' , 'No Action')->count();

        return \view('admin.allCustomers' ,\compact('customers', 'Called', 'Visited', 'Followed', 'no_action'));
    }
    
}
