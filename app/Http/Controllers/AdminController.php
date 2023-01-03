<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        if(session()->has('id'))
        {
            $id = session('id');
            $admin = Admin::select('admins.*')->where('id',$id)->get()->toArray();
            return view("admin.dashboard",['admin'=>$admin]);
        }
        else
        {
            return redirect('/');
        }
    }
    public function login_page()
    {
        if(session()->has('id'))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return view('admin.login');
        }
    }
    public function login(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $result = Admin::where("username","=",$req->username)->first();
        if($result)
        {
            if (Admin::where("password","=",$req->password)->first()) 
            {
                $req->session()->put('id',$result->id);
                return redirect('admin/dashboard');
            }
            else
            {
                return back()->with('fail','! Password Not Match');
            }
        }
        else
        {
            return back()->with('fail','! This Id is not registered');
        }
    }
    public function logout()
    {
        if (session()->has('id')) 
        {
            session()->pull('id',null);
        }
        return redirect('/');
    }
}
