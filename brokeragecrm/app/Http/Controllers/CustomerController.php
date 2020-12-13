<?php

namespace App\Http\Controllers;


use App\User;
use App\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{

    //new customer
    public function newCustomer(Request $request)
    {
        // store new customer
        $customer = new Customer ;
        $customer->first_name = $request->first_name ;
        $customer->last_name = $request->last_name ;
        $customer->phone = $request->phone ;
        $customer->address1 = $request->address1 ;
        $customer->address2 = $request->address2 ;
        $customer->email = $request->email;
        $customer->city = $request->city; 
        $customer->country = $request->country; 
        $customer->postal_code = $request->postal_code ;
        $customer->save();

    }

    
    //store after validation
    protected function store(Request $request)
    {
    
        
        DB::transaction(function () use($request) {

            //check customer data validation
            $request->validate([
                'first_name' => 'required|string|min:2|max:255',
                'last_name'  => 'required|string|min:2|max:255',
                'email' => 'required|string|email|max:255|unique:customers',
                'city' => 'required|string','max:255|min:2',
                'country' => 'required|string','max:255|min:2',
                'address1' => 'required|string','max:255|min:4',
                'address2' => 'string|max:255',
                'phone' => 'required|string|min:6|max:255|unique:customers',
                'postal_code' => 'required|string','min:2|max:255',
            ]);
            
            //store new customer after validation
            $this->newCustomer($request);  

        });
        
        //redirect to home
        return \redirect('/home');


    }
   

    //return form to create new customer
    public function create()
    {
        return \view('newCustomer');
    }


    // admin
    //return edit form with all employees to assign a specific customer
    public function edit($id)
    {
        try {

            $employees = User::get();
            $customer = Customer::where('id' , $id)->firstOrFail();
            return \view('admin.assignCustomer' , \compact('employees' , 'customer'));
        
        } catch (\Exception $ex) {
            //return dd($ex->getMessage());
            return \view('errors.404');
        }
        
    }


    // admin
    //assign employee to customer 
    public function update(Request $request, $id)
    {
        try {
                
            //using transaction to update assigned_to column
            DB::transaction(function () use($request ,$id) {

                $employee = $request->employee; //selected employee
                //check if employee isn't null to avoid str data in assigned to
                if($employee != null)
                {
                    $employee_id = Str::after($employee , 'ID:'); //get employee id from string
                }
                else{
                    $employee_id = NULL ;  //set null into id column
                }
    
                //update assigned_to column in customers table
                $customer = Customer::where('id' ,$id)->first() ;
                $customer->assigned_to = $employee_id ;
                $customer->save();
            });
            return \redirect('/home');
            
        } catch (\Exception $ex) {
            //return dd($ex->getMessage());
            return \view('errors.500');
        }

    }

    //show customer details
    public function show($id)
    {
        try{
            
            $customer = Customer::where('id' ,$id)->firstOrFail();
            return \view('showCustomers' ,\compact('customer'));

        }catch (\Exception $ex) {
            //return dd($ex->getMessage());
            return \view('errors.404');
        }
        
    }

}
