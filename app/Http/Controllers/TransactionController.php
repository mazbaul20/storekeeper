<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    function TransactionsPage(){
        $transactions = DB::table("transactions")->get();
        return view('backend.pages.dashboard.transaction',['transactions'=>$transactions]);
    }
}
