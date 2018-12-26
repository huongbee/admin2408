<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validation;

class HomeController extends Controller
{
    function index(){
        return view('pages.index');
    }

    function getLogin(){
        return view('pages.login');
    }
    function getRegister(){
        return view('pages.register');
    }
    function postRegister(Request $req){
        $validator = Validator::make($req->all(), [
            'username'=>'required|min:10|unique:users,username',
            'fullname'=>'required',
            'birthdate'=>'required',
            'gender'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'confirmation_password'=>'required|same:password'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($req->all());
        }

        dd($req->all());
    }
}
