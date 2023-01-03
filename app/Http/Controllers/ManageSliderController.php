<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ngo_slider;
use DataTables;
use Hash;
use Symfony\Component\Console\Input\Input;

class ManageSliderController extends Controller
{
    public function save_slider(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'image' => 'required'
        ]);
        $table = new ngo_slider();
        $image = $req->file('image');
			$file_name = "";
			if($image) {
				$file_name = time().'.'.$image->getClientOriginalExtension();
				$destinationPath = public_path('/slider_images');
				$resp = $image->move($destinationPath, $file_name);
			}
        $table->title = $req->title;
        $table->image = $file_name;
        $table->save();
        return 3;
    }
    public function getdataSlider(Request $request)
    {
        if ($request->ajax()) {
            $data = ngo_slider::select('*')->orderBy('id','desc');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        if($row->status == 1)
                        {
                            $status = '<form class="status_change"><input type="hidden" class="id" name="id" value="'.$row->id.'" ><label class="switch"><input type="checkbox" checked class="check" name="status" value="'.$row->status.'"><span class="slider round"></span></label></form>';
                        }
                        else
                        {
                            $status = '<form class="status_change"><input type="hidden" class="id" name="id" value="'.$row->id.'" ><label class="switch"><input type="checkbox" checked class="check" name="status" value="'.$row->status.'"><label class="switch"><input type="checkbox" class="check" name="status"  id="'.$row->id.'" value="'.$row->status.'"><span class="slider round"></span></label></form>';
                        }
                        $edit = "<button type='button'  class='btn btn-primary' data-id='".$row->id."' data-title='".$row->title."' data-image='".$row->image."' id='edit_slider_Btn' data-bs-toggle='modal' data-bs-target='#edit_slider'><i class=' ri-edit-line'></i></button>";
                        $delete = '<button  type="button" class="btn btn-primary" data-id="'.$row->id.'" id="delete_btn" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"><i class=" ri-delete-bin-5-line"></i> </button>';
                        return $edit." ".$delete."<br><br>".$status;
                    })
                    ->rawColumns(['action'])
                    ->make(true);     
                         
        }
        
    }
    public function UpdateSlider(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'image' => 'required',
        ]);
        $id = $req->id;
        $table = ngo_slider::where('id', '=' , $id)->first();
        $image = $req->file('image');
			$file_name = "";
			if($image) {
				$file_name = time().'.'.$image->getClientOriginalExtension();
				$destinationPath = public_path('/slider_images');
				$resp = $image->move($destinationPath, $file_name);
			}
        $table->title = $req->title;
        $table->image = $file_name;
        $table->save();
        return 3;   
    }
    public function UpdateStatus(Request $req)
    {
        echo $table = ngo_slider::all()->find($req->id);
        // if($table->status == 0)
        // {
        //     $table->status = "1"; 
        //     $table->save();
        // } 
        // else
        // {
        //     $table->status = "0";
        //     $table->save();
        // }   
    }
    public function delete($id)
    {
        $data = ngo_slider::find($id);
        $data->delete();
        return redirect('admin/app-setting/manage-slider');
    }
}
