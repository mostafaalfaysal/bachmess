<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\meal;
use App\Models\sign;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminPanel(){
        return view('backend.dashboard');
    }
    public function master(){
        return view('backend.master');
    }
    public function membersList(){
        return view('backend.memberList');
    }
    public function member(){
        return view('backend.partial.pages.admin.member');
    }
    public function addMember(){
        return view('backend.addMember');
    }
    public function adminMakePay(){
        return view('backend.partial.pages.admin.payment');
    }
    public function mealManage(){
        return view('backend.partial.pages.admin.meal');
    }
    public function adminReport(){
        return view('backend.partial.pages.admin.report');
    }
    public function makePayment(){
        return view('backend.makePayment');
    }
    public function bills(){
        return view('backend.bill');

    }
    public function makeFine(){
        return view('backend.makeFine');
    }
    public function createMember(Request $request){
//        dd($request->all());
        sign::create([
            'member_email'=>$request->member_email,
            'member_password'=>$request->member_password,
            'member_name'=>$request->member_name,
            'member_phone'=>$request->member_phone,
        ]);
        return redirect()->back();

    }
    public function MealCount(Request $request){
//        dd($request->all());
        meal::create([
            'member_name'=>$request->member_name,
            'meal_count'=>$request->meal_count,
        ]);
    }
}
