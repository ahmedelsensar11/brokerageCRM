<?php

namespace App\Http\Controllers;
use Auth;

use App\User;
use App\Customer;
use App\Action;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ActionController extends Controller
{
    
    // employee
    //get action page to make action on customer
    protected function getAction($id)
    {
        try {
            
            $customer = Customer::where('id' , $id)->firstOrFail();
            return \view('employee.addAction' , \compact( 'customer'));
 
        }catch (\Exception $ex) {
            //return dd($ex->getMessage());
            return \view('errors.404');
        }
           
    }

    //update status by action
    protected function updateStatusOfCustomer($customer_id ,$status)
    {
        $customer = Customer::where('id' , $customer_id)->firstOrFail();
        $customer->status = $status;
        $customer->save();
    }

    //store action details in database
    protected function storeActionDetails($customer_id , $formRequest)
    {
        
        //insert in actions
        $employee_id = \Auth::user()->id;
        $action = new Action ;
        $action->customer_id = $customer_id;
        $action->user_id = $employee_id;
        $action->action_type = $formRequest->action_type;
        $action->desc = $formRequest->action_desc;
        $action->save();
        
        
    }

    //get status from action
    protected function getStatusFromActionRequest($actionRequest)
    {
        $status = "No Action";
        if($actionRequest->action_type != 'No Action') 
        {
            $status = $actionRequest->action_type."ed";
        }

        return $status;
    }

    // store new action by current employee
    protected function recordNewAction(Request $request , $id)
    {
        try {

            DB::transaction(function () use($request ,$id) {
                
                //get status
                $status = $this->getStatusFromActionRequest($request);
                //set status in customer table
                $this->updateStatusOfCustomer($id, $status);
                //store in action table
                $this->storeActionDetails($id ,$request);
    
            });

            return \redirect('/home');

        } 
        catch (\Exception $ex) {
            //return dd($ex->getMessage());
            return \view('errors.500');
        }
        
    }


    //view All Actions
    public function viewAllActions()
    {
        //get all actions
        $actions = Action::orderBy('created_at' , 'desc')->get();
        return \view('admin.allActions' ,\compact('actions'));
    }


}
