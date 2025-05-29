<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Sarana;
use App\Models\Setting;
use App\Models\Siswa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Setting::latest()->get();
        $datas = Guru::latest()->get();
        $siswaCount = Siswa::count();
        $guruCount = Guru::count();
        return view('home',compact('data','siswaCount','guruCount','datas'));
    }
    public function profilIndex(){
        $data = Setting::latest()->get();
        $siswaCount = Siswa::count();
        $guruCount = Guru::count();
        return view('profil',compact('data','siswaCount','guruCount'));
    }
    public function siswaIndex(){
        $data = Setting::latest()->get();
        $eskul = Eskul::get();
        $siswaCount = Siswa::count();
        return view('siswa',compact('data','eskul','siswaCount'));
    }
    public function jurusanIndex(){
        $data = Setting::latest()->get();
        $jurusan = Jurusan::get();
        $siswaCount = Siswa::count();
        return view('jurusan',compact('data','jurusan','siswaCount'));
    }
    public function saranaIndex(){
        $data = Setting::latest()->get();
        $sarana = Sarana::get();
        $siswaCount = Siswa::count();
        return view('sarana',compact('data','sarana','siswaCount'));
    }

}
