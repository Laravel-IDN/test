<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\WBP;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index1(){
        return view('admin.pages.dashboard.ringkasan');
    }

    public function index2(){
        $list = Feedback::paginate(10);
        return view('admin.pages.dashboard.kritikdansaran', compact('list'));
    }

    public function index3(){
        $list = WBP::paginate(10);

        return view('admin.pages.dashboard.kamarhunian', compact('list'));
    }

    public function index4(){
        $list = WBP::paginate(10);

        return view('admin.pages.dashboard.tamping', compact('list'));
    }

    public function laporanf(){
        return view('admin.pages.dashboard.laporanf');
    }

    public function laporane(){
        return view('admin.pages.dashboard.laporane');
    }
}
