<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function registration(){
        return view('pages.customer.registration');

    }

    

    public function registrationSubmit(Request $request){
        $this->validate($request,
 
        [
            'name'=>'required|min:4|max:15',
            'id'=>'required|min:2|max:6',
            'phone'=>'required|digits:11',
            'email'=>'required|email',
            'psw'=>'required',
            'cpsw'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 4 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'id.min'=>'Id must be more than 1 characters!',
            'id.max'=>'Id must be less than 7 characters!',
            'phone.required'=>'Number is requried!',
            'phone.digits'=>'Please enter valid phone number!',
            'email.required'=>'Email is required!',
            'psw.required'=>'This field is required!',
            'cpsw.required'=>'This field is required!',
            'id.required'=>'This field is required!',
            'email.email'=>'Please enter valid Email address!'
        ]

    
        );

        $var = new Customer();
        $var->name = $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->psw = $request->cpsw;
        $var->save();

        return 'Registration Successful!';
    }

    public function list(){
        $customers = Customer::all();
        return view('pages.customer.list')->with('customers', $customers);
    }

    public function edit(Request $request){
        return $request->name;
    }

   

    public function login(){
        return view('pages.customer.login');
    }

    public function loginCheck(Request $request){
        $this->validate($request,
            [
                'id' => 'required',
                'psw'=>'required'
            ],

            [
                'id.required'=> 'Enter your id!',
                'psw.required'=> 'Enter your password!'
                
            ]
        );

        $customers = Customer::all();
        $Check=False;
        foreach($customers as $user)
        {
            if($user->id== $request->id && $user->psw==$request->psw)
                {
                    return ("Login Successful!");
                    $Check=True;
                }
                
        }
        if($Check==False)
        {
           return ("Failed to login. Please try again!");
        }
    }

    public function contact(){
        return view('pages.customer.contact');
    }

    public function contactS(Request $request){
        $this->validate($request,
            [
                'id' => 'required',
                'fb'=>'required|min:8|max:150'
            ],
            [
                'id.required'=> 'Enter your id!',
                'fb.min'=> 'Message must be more than 7 letters',
                'fb.max'=> 'Message must be less than 151 letters',
                'fb.required'=> 'This field is required',
            ]
            );

            $customers = Customer::all();
            $Check=False;
            foreach($customers as $user)
            {
                if($user->id== $request->id)
                    {
                        return "<h1>Your feedback has sent. </h1>";    
                        $Check=True;
                    }
                    
            }
            if($Check==False)
            {
            return ("Failed to submit your feedback. Please try again!");
            }
              
    }

    
}
