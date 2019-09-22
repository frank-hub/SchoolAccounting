<?php

namespace App\Http\Controllers;

use App\FeeType;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Students::all()->count();
        $feeTypes = FeeType::all()->count();
        $balance = DB::table('invoices')->sum('balance');
        $paid_amount = DB::table('invoices')->sum('paid_amount');
        return view('home',compact('students','feeTypes','balance','paid_amount'));
    }
}
