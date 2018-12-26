<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
