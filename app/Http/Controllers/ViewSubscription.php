<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscription;
use DataTables;

class ViewSubscription extends Controller
{
    public function view_page()
    {
        return view('admin.view_subscription');
    }
    public function getdata(Request $request)
    {
        if ($request->ajax()) {
            $data = subscription::select('*')->orderBy('id','desc');
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
    }
}
