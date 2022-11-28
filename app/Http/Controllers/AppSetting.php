<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppSetting extends Controller
{
    public function manage_slider()
    {
        return view('admin.manage_slider');
    }
    public function manage_services()
    {
        return view('admin.manage_services');
    }
    public function manage_notification()
    {
        return view('admin.manage_notification');
    }
}
