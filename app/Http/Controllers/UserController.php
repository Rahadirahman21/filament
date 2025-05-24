<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Setting::latest()->get();
        $dataCount = Setting::count();
        return view('home',compact('data','dataCount'));
    }
public function profilIndex(){
      $data = Setting::get();
        $dataCount = Setting::count();
        return view('profil',compact('data','dataCount'));
    }

}
