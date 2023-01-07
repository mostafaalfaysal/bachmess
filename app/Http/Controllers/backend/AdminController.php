<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Meal;
use App\Models\Bill;
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
        $members = Member::get();
        return view('backend.memberList',compact('members'));
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
        $members = Member::get();
        return view('backend.addMeal', compact('members'));
    }
    public function adminReport(){
        return view('backend.partial.pages.admin.report');
    }
    public function makePayment(){
        $members = Member::get();
        return view('backend.makePayment', compact('members'));
    }
    public function bills(){
        return view('backend.bill');

    }
    public function makeFine(){
        $members = Member::get();
        return view('backend.makeFine', compact('members'));
    }
    public function mealReport(){
        return view('backend.mealReport');
    }
    public function addingMember(Request $request){
//        dd($request->all());
        member::create([
            'memberFirstName'=>$request->memberFirstName,
            'memberLastName'=>$request->memberLastName,
            'memberEmail'=>$request->memberEmail,
            'fathersName'=>$request->fathersName,
            'mothersName'=>$request->mothersName,
            'dateOfBirth'=>$request->dateOfBirth,
            'nidNumber'=>$request->nidNumber,
            'permanentAddress'=>$request->permanentAddress,
            'phoneNumber'=>$request->phoneNumber,
            'numberOfSeat'=>$request->numberOfSeat,
            'memberPassword'=>$request->memberPassword,
        ]);
        return redirect()->back();

    }
    public function addingMeal(Request $request)
    {
        meal::create([
            'memberID'=>$request->memberID,
            'memberName'=>$request->memberName,
            'amountMeals'=>$request->amountMeals,
            'fineNote'=>$request->fineNote,
            'mealDate'=>$request->mealDate,

        ]);
        return redirect()->back();
    }
    public function addingBill(Request $request)
    {
        bill::create([
            'apartmentBill'=>$request->apartmentBill,
            'maintenanceBill'=>$request->maintenanceBill,
            'gasBill'=>$request->gasBill,
            'servantBill'=>$request->servantBill,
            'waterBill'=>$request->waterBill,
            'internetBill'=>$request->internetBill,
            'electricityBill'=>$request->electricityBill,

        ]);
        return redirect()->back();
    }
    public function login()
    {
        return view('backend.login');
    }
    public function adminLogin(Request $request){
//       dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        $credentials=$request->except('_token');
        if(auth()->attempt($credentials)){
            return redirect()->route('adminDash');
        }

        return redirect()->back()->with('message','Invalid Credentials.');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('adminLogin');
    }
}
