<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Students;
use Session;
use Auth;
// use Illuminate\Support\Facades\Auth;

class FeeController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('admin/accounting/school_fee',compact('students'));
    }

    public function store(Request $request){
            
        // $request->validate([
        //     'reg_no' => 'required',
        // 'paid_by'=>'required',
        // 'class'=>'required',
        // 'payment_mode'=>'required',
        // 'amount'=>'required',
        // ]);
        // $students->create($request->all());
        $fee = new Fees;      
        $fee->reg_no = $request->get('reg_no');
        $fee->paid_by = $request->get('paid_by');
        $fee->class = $request->get('class');
        $fee->payment_mode = $request->get('payment_mode');
        $fee->bank_slip_code = $request->get('bank_slip_code');
        $fee->mpesa_code = $request->get('mpesa_code');
        $fee->amount = $request->get('amount');
        $fee->served_by = Auth::user()->name;
        $fee->save();
        // var_dump($request->all());

        Session::flash('alert-success', 'Ksh .'." ".$request->amount.'Payment Made Successfully For'." ".$request->reg_no);

        return redirect()->back();
    }
}
