<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donnor;
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
}
