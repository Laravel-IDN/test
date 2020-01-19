<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index1(){
        return view('admin.pages.dashboard.ringkasan');
    }

    public function index2(){
        return view('admin.pages.dashboard.kritikdansaran');
    }

    public function index3(){
        return view('admin.pages.dashboard.kamarhunian');
    }

    public function index4(){
        return view('admin.pages.dashboard.tamping');
    }

    public function laporan(){
        return view('admin.pages.dashboard.laporan');
    }
}
