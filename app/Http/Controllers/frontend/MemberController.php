<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function memberPanel(){
        return view('frontend.dashboard');
    }
    public function memberMakePay(){
        return view('frontend.dashboard');
    }
}
