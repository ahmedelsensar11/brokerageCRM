<?php

namespace App\Http\Controllers;
use Auth;

use App\User;
use App\Customer;
use App\Action;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    
    //employee customers
    public function index()
    {
        $employee_id = \Auth::user()->id;
        //get employee customers
        $customers = Customer::where('assigned_to' , $employee_id)->orderBy('created_at' , 'desc')->get();
        $Called = Customer::where('status' , 'Called')->count();
        $Visited = Customer::where('status' , 'Visited')->count();
        $Followed = Customer::where('status' , 'Followed')->count();
        $no_action = Customer::where('status' , 'No Action')->count();

        return \view('employee.myCustomers' ,\compact('customers', 'Called', 'Visited', 'Followed', 'no_action'));
    }


    // admin
    //return form to add new employee 
    public function create()
    {
        return \view('admin.newEmployee');
    }

    // admin
    //new employee
    public function newEmployee(Request $request)
    {
        // store new employee
        $employee = new User ;
        $employee->first_name = $request->firstname ;
        $employee->last_name = $request->lastname ;
        $employee->address = $request->address ;
        $employee->email = $request->email;
        $employee->password = \Hash::make($request->password) ; 
        $employee->position = $request->position; 
        $employee->save();

    }
    
    // admin
    //store new employee
    protected function store(Request $request)
    {

        DB::transaction(function () use($request) {

            //check customer form validation
            $request->validate([
                'firstname' => ['required', 'string','min:2' ,'max:255'],
                'lastname' => ['required', 'string','min:2', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'position' => ['required', 'string','min:2', 'max:255'],
                'address' => ['required', 'string','min:2', 'max:255'],
            ]);
            
            //store new customer after validation
            $this->newEmployee($request);  

        });

        //redirect to home
        return \redirect('/home');
    

    }


    //employee
    //view my action
    public function viewMyAction()
    {
        //get actions of current employee
        $employee_id = \Auth::user()->id;
        $actions = Action::where('user_id' ,'=' ,$employee_id)->orderBy('created_at' , 'desc')->get();

        return \view('employee.myActions' ,\compact('actions'));
    }

}
