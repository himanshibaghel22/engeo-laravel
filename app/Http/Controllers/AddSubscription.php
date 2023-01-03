<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donnor;
use App\Models\subscription;

class AddSubscription extends Controller
{
    public function view_page()
    {
        $data = Donnor::all();
        return view('admin.add_subscription',['data'=>$data]);
    }
    public function submitdata(Request $req)
    {
        $req->validate([
            'donners' => 'required',
            'amount' => 'required',
            'duration_number' => 'required',
            'duration' => 'required',
            'emi' => 'required'
        ]);
        $table = new  subscription();
        $table->donnors = $req->donners;
        $table->amount = $req->amount;
        $table->duration_number = $req->duration_number;
        $table->duration = $req->duration;
        $table->emi = $req->emi;
        $data = $table->save();
        return 1;
    }

}
