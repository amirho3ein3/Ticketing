<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Person;

class HomeContoroller extends Controller
{
    function index()
    {
        return view('index');
    }
    
    function login(){
        return view('login');
    }
    function login_post()
    {
        $flag=Person::where('user_name',request('username'))->count();
        $flag1=Person::where('password',request('password'))->count();
        if($flag>0 && $flag1>0)
        {
            
        }
        else{
            return "Error";
        }
    }
    function sign_up_view(){
        return view('sign-up');
    }
    function sign_up(){
        $flag=Person::where('user_name',request('username'))->count();

        if($flag===0)
        {
            Person::create([
                'FirstName' => request('firstname'),
                'LastName' => request('lastname'),
                'e_mail' => request('email'),
                'user_name' => request('username'),
                'password' => request('password'),
                'phone_number' => request('number')
            ]);
        }
        else{
            
        }

    }
    function frequenc_quetion(){
        return view();
    }
}
