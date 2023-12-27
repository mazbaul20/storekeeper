<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }//end method
    function DashboardInfo(){
        // get total sales for today
        $todaysSales = DB::table('transactions')
            ->whereDate('created_at', now()->toDateString())
            ->sum('total_price');

        // get total sales for yesterday
        $yesterdaysSales = DB::table('transactions')
            ->whereDate('created_at', now()->subDay()->toDateString())
            ->sum('total_price');

        // get total sales for this month
        $thisMonthsSales = DB::table('transactions')
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->sum('total_price');

        // get total sales for last month
        $lastMonthsSales = DB::table('transactions')
            ->whereYear('created_at', now()->subMonth()->year)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->sum('total_price');

        return view('backend.pages.dashboard.dashboard-page',
        compact('todaysSales','yesterdaysSales','thisMonthsSales','lastMonthsSales'));
    }
}
