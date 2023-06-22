<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginpage()
    {
        if(!empty(Auth::check()))
        {
         
            return redirect('/dashboard');
         
        }
        return view('auth.login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
  
    public function postlogin( Request $request){
     
        if($request->isMethod('post')){
            $data=$request->all();
           

            $rules=[
                'email'=>'required|email|max:255',
                'password'=>'required|max:30'
            ];
            $message=[
             'email.required'=>"email is required",
             'email.email'=>"valid email is required",
             'password.required'=>"password is required",
            ];
            $this->validate($request,$rules,$message);
            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']]))
            {
                return redirect("/dashboard");
            }
            
     
        else
        {
          return redirect()->back()->with('error','please correct email or password');
        }
        }
    }

   
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function registerpage()
    {
        return view('auth.registration');
    }
    public function postregister(Request $request)
    {

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' =>  'required|string|email|max:255|unique:Admins',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $admin = Admin::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect('/login');
    }
    public function forgetpage()
    {
        return view('auth.forget-password');
    }
}
