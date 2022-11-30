<?php

namespace App\Http\Controllers;

use App\Models\Donnors;
use Illuminate\Http\Request;

class DonnorController extends Controller
{
    public function donnor_page()
    {
        return view('admin.donnors');
    }
    public function getData(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $rowPerPage = $request->get('length');

        $orderArray = $request->get('order');
        $columnNameArray = $request->get('columns');

        $searchArray = $request->get('search');
        $columnIndex = $orderArray[0]['column'];

        $columnName = $columnNameArray[$columnIndex]['data'];

        $columnSortOrder = $orderArray[0]['dir'];
        $searchName = $searchArray['value'];

        $users =  new Donnors();
        $total = $users->count();

        $totalFilter = $total;

        $arrData = new Donnors();
        $arrData = $arrData->skip($start)->take($rowPerPage);
        
        $arrData = $arrData->get();
        $newArr = [];
        foreach($arrData as $data) {
            $newArr[] = array(
                "user_id"=>$data['user_id'],
                "name"=>$data['name'],
                "email"=>$data['email'],
                "mobile_number"=>$data['mobile_number'],
                "address"=>$data['address'],
                "city"=>$data['city'],
                "pin_code"=>$data['pin_code'],
                "pan_number"=>$data['pan_number'],
            );
        }
        $response = array(
            'draw' => intval($draw),
            'recordsTotal' => $total,
            'recordsFiltered' => $totalFilter,
            'data' => $newArr,
        );
        return response()->json($response);
    
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
        $user_id = bin2hex($bytes);
        $table = new Donnors();
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
