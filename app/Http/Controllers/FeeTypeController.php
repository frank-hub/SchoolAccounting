<?php

namespace App\Http\Controllers;

use App\FeeType;
use Illuminate\Http\Request;

class FeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeTypes = FeeType::all();
        return view('admin/accounting/fee_type',compact('feeTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
           'fee_type' => 'required|unique:fee_types',
            'note' => 'required',
        ]);
        $fee_type = new FeeType;
        $fee_type->fee_type = $request->fee_type;
        $fee_type->note = $request->note;
        $fee_type->termly = $request->termly;
        $fee_type->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function show(FeeType $feeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeType $feeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeType $feeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeType $feeType)
    {
        //
    }
}
