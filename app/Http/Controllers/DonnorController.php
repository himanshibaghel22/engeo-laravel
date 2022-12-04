<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Donnor;
use DataTables;


class DonnorController extends Controller
{
    public function donnor_page(Request $req)
    {  
        return view('admin.donnors');
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Donnor::select('*')->orderBy('id','desc');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $edit = "<button type='button'  class='btn btn-primary' data-id='".$row->id."' data-name='".$row->name."' data-email='".$row->email."' data-mobile_number='".$row->mobile_number."' data-address='".$row->address."' data-city='".$row->city."' data-pin_code='".$row->pin_code."' data-pan_number='".$row->pan_number."' id='editBtn' data-bs-toggle='modal' data-bs-target='#edit-modal'><i class=' ri-edit-line'></i>Edit</button>";
                        $id = $row->id;
                        return $edit;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            
                    
        }
        //return redirect('donnors',[data=>])
        
    }
    public function SubmitData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required | numeric | digits:10',
            'address' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'pan_number' => 'required'
        ]);
        $bytes = random_bytes(5);
        $uniqu_code = bin2hex($bytes);
        $user_id = strtoupper($uniqu_code);
        $table = new Donnor();
        $table->user_id = $user_id;
        $table->name = $req->name;
        $table->email = $req->email;
        $table->mobile_number = $req->mobile_number;
        $table->address = $req->address;
        $table->city = $req->city;
        $table->pin_code = $req->pin_code;
        $table->pan_number = $req->pan_number;
        $table->save();
        return redirect('admin/donnors');
    }
    public function UpdateData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required | numeric | digits:10',
            'address' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'pan_number' => 'required'
        ]);
        $id = $req->id;
        
        $bytes = random_bytes(5);
        $uniqu_code = bin2hex($bytes);
        $user_id = strtoupper($uniqu_code);
        $table = Donnor::where('id', '=' , $id)->first();
        $table->user_id = $user_id;
        $table->name = $req->name;
        $table->email = $req->email;
        $table->mobile_number = $req->mobile_number;
        $table->address = $req->address;
        $table->city = $req->city;
        $table->pin_code = $req->pin_code;
        $table->pan_number = $req->pan_number;
        $table->save();
        return redirect('admin/donnors');   
    }
}
