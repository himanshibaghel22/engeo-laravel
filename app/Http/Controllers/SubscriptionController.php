<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription_page()
    {
        return view('admin.subscription');
    }
}
