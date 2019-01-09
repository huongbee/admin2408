<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;
use Auth;
use App\Bill;

class HomeController extends Controller
{
    function updateStatusBill(Request $req){
        print_r($req->all());die;
        // $bill = Bill::where([
        //     ['id','=',$req->id_bill],
        //     ['status','=',0]
        // ])->orWhere([
        //     ['id','=',$req->id_bill],
        //     ['status','=',1]
        // ])->first();

        $bill = Bill::where('id','=',$req->id_bill)
                ->where(function($q){
                    $q->where('status','=',0);
                    $q->orWhere('status','=',1);
                })->first();
        if($bill){
            $bill->status = $req->status;
            $bill->save();
            echo 'ok';
        }
        else{
            echo 'notok';
        }
        return;

    }
    function index(){
        return redirect()->route('listbill',['status'=>0]);
    }

    function listBill(Request $req){
        $status = $req->status;
        $bills = Bill::with('customer','product','billDetail')
                ->where('status','=',$status)
                ->paginate(5);
        return view('pages.index',compact('bills','status'));
    }
    function getLogin(){
        return view('pages.login');
    }
    function postLogin(Request $req){
        //validation

        $data = [
            'email'=>$req->email,
            'password'=>$req->password
        ];
        if(Auth::attempt($data)){ // boolean
            // dd(Auth::user()); // User::get();
            return redirect()->route('home');
            // return redirect('/');
        }
        else{
            return redirect()->back()->with('error','Email or password invalid!');
        }
    }


    function getRegister(){
        return view('pages.register');
    }
    function postRegister(Request $req){
        $mess = [
            'username.unique' => 'Username đã có người sử dụng',

        ];
        $validator = Validator::make($req->all(), [
            'username'=>'required|min:6|unique:users,username',
            'fullname'=>'required',
            'birthdate'=>'required',
            'gender'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'confirmation_password'=>'required|same:password'
        ],$mess);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($req->all());
        }
        $user = new User;
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('login')->with('success','You can login now!');
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


    

}
