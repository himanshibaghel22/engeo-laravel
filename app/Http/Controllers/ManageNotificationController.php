<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ngo_managenotification;
use DataTables;

class ManageNotificationController extends Controller
{
    public function notification(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $table = new ngo_managenotification();
        $table->title = $req->title;
        $table->description = $req->description;
        $table->save();
        return 'notification saved';
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = ngo_managenotification::select('*')->orderBy('id','desc');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $edit = "<button type='button'  class='btn btn-primary' data-id='".$row->id."' data-name='".$row->name."' data-email='".$row->email."' data-mobile_number='".$row->mobile_number."' data-address='".$row->address."' data-city='".$row->city."' data-pin_code='".$row->pin_code."' data-pan_number='".$row->pan_number."' id='editBtn'>Resend</button>";
                        $id = $row->id;
                        return $edit;
                    })
                    ->rawColumns(['action'])
                    ->make(true);          
        }
    }
}
