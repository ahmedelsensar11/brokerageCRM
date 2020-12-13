<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //home
    public function index()
    {
        //get all customers
        $customers = Customer::orderBy('created_at' , 'desc')->get();
        $Called = Customer::where('status' , 'Called')->count();
        $Visited = Customer::where('status' , 'Visited')->count();
        $Followed = Customer::where('status' , 'Followed')->count();
        $no_action = Customer::where('status' , 'No Action')->count();

        return \view('home' ,\compact('customers', 'Called', 'Visited', 'Followed', 'no_action'));
    }


    public function notAuth()
    {
        return \view('notAuth');
    }
}
