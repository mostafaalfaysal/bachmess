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
        return view('backend.addMeal');
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
}
