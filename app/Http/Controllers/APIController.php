<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donnor;
use App\Models\ngo_slider;
use App\Models\subscription;
use PhpParser\Node\Stmt\Do_;

class APIController extends Controller
{
    public function login(Request $req)
    {
        $donnor = new Donnor();
        $donnor->user_id = $req->user_id;
        $result = Donnor::where("user_id","=",$req->user_id)->first();
        if($result)
        {
            return ["status"=>true,"message"=>"Login Successfully","data"=>$result];
        }
        else
        {
            return ["status"=>false,"message"=>"User Id Does Not Exist","data"=>array()];
        }
    }
    public function active_slider(Request $req)
    {
        $table = new ngo_slider();
        $result = ngo_slider::all()->where("status","=","1");
        if($result)
        {
            return ["status"=>true,"message"=>"Active Silders","Base URL"=>"http://localhost/git/engeo-laravel/public/slider_images/","data"=>$result];
        }
        else
        {
            return ["status"=>false,"message"=>"Failedt","data"=>array()];
        }
    }
    public function subscriptions($id)
    {
        $table = new subscription();
        $result = subscription::where("id","=",$id)->first();
        if($result)
        {
            return ["status"=>true,"message"=>"Success","data"=>$result];
        }
        else
        {
            return ["status"=>false,"message"=>"This Id Does Not Exist","data"=>array()];
        }
    }
}
