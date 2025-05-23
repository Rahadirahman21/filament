<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Setting::get();
        $dataCount = Setting::count();
        return view('welcome',compact('data','dataCount'));
    }
}
