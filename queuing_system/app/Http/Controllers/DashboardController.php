<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){

        $results = DB::table('devices')
        ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS date"), DB::raw("COUNT(*) AS count"))
        ->groupBy('date')
        ->orderBy('date')
        ->get();
return response()->json($results);
// return view('dashboard.index');
// return view('dashboard.a');
    }
}
