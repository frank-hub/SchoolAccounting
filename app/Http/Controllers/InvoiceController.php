<?php

namespace App\Http\Controllers;

use App\FeeArchive;
use App\FeeType;
use App\Invoice;
use App\Students;
use Illuminate\Http\Request;
use Session;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();

        return view('admin/accounting/invoice',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Students::all();
        $feeTypes = FeeType::all();
        return view('admin/accounting/add_invoice',compact('students','feeTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);

        $invoice = new Invoice;

        $invoice->class = $request->class;
        $invoice->student_name = $request->student_name;
        $invoice->date_invoice = $request->date_invoice;
        $invoice->payment_status = $request->payment_status;
        $invoice->payment_method = $request->payment_method;
        $invoice->fee_type = $request->fee_type;
        $invoice->fee_amount = $request->fee_amount;
        $invoice->paid_amount = $request->paid_amount;
        $invoice->balance = ((int)$request->fee_amount - (int)$request->paid_amount);
        $invoice->save();

        $fee = FeeArchive::create($request->all());
        $fee->save();

        Session::flash('alert-success', 'Invoice Created Successfully');

//         var_dump($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoices = Invoice::find($id);
        return view('admin.accounting.payment',compact('invoices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $invoice = Invoice::find($id);
        return view('admin.accounting.edit_invoice',compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $invoice = Invoice::find($id);
        $invoice->class = $request->class;
        $invoice->student_name = $request->student_name;
        $invoice->date_invoice = $request->date_invoice;
        $invoice->payment_status = $request->payment_status;
        $invoice->payment_method = $request->payment_method;
        $invoice->fee_type = $request->fee_type;
        $invoice->fee_amount = $request->fee_amount;
        $invoice->paid_amount = $request->paid_amount;
        $invoice->balance = ((int)$request->fee_amount - (int)$request->paid_amount);
        $invoice->save();

        Session::flash('alert-info', 'Invoice Updated Successfully');
        $invoices = Invoice::all();
        return view('admin/accounting/invoice',compact('invoices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        Session::flash('alert-danger', 'Invoice Deleted Successfully');
        return redirect()->back();
    }

    public function payment(Request $request, $id){

        $invoice = Invoice::find($id);
        $invoice->paid_amount = $request->paid_amount;
        $invoice->balance = ((int)$request->balance - (int)$request->paid_amount);
        $invoice->save();
        $fee = FeeArchive::create($request->all());
        $fee->save();
        Session::flash('alert-info', 'Invoice Updated Successfully');

        return redirect()->back();
    }

    public function print($id){
        $invoice = Invoice::find($id);
        $student = Students::where('reg_name',$invoice->student_name)->first();
        $checks = FeeArchive::where('student_name',$invoice->student_name)->get();
//        $students = Students::where('')
        return view('admin/accounting/print_invoice',compact('invoice','student','checks'));
    }

    public function fee_archives()
    {
        $invoices = FeeArchive::all();

        return view('admin/accounting/fee_archives',compact('invoices'));
    }
}
