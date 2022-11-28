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
                "id"=>$data['id'],
                "name"=>$data['full_name'],
                "email"=>$data['username'],
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
}
