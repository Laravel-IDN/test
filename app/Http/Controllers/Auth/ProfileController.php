<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ProfileController extends Controller
{
    public function index(){
        return view('auth.profile');
    }
}
