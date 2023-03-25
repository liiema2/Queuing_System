<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class notify extends Controller
{
    //
    public function index(){
        // $query = DB::table('services');
        $number_order= DB::table('orders')->get();


        // $services = DB::table('services')->get();
        // dd($services);
        return view('dashboard.ordinalNumber.ordinalNumber',['number_order'=>$number_order] );
    }


    public function index_admin(){
        // $number_order = DB::table('accounts')
        // ->select('id', 'name', 'username', 'phone_number', 'email', 'password', 'role', 'created_at', 'updated_at', 'description')
        // ->groupBy('id', 'name', 'username', 'phone_number', 'email', 'password', 'role', 'created_at', 'updated_at', 'description')
        // ->get();
        $number_order = DB::table('accounts')
        ->select('role', 'description', DB::raw('count(*) as count'))
        ->groupBy('role', 'description')
        ->get();
// dd( $number_order);

    return view('dashboard.manager.manager',['account' => $number_order]);
    }
    public function more(){
        return view('dashboard.manager.manager_more');
    }
    public function mores(){



        return view('dashboard.manager.manager');
    }
    public function update_ad(){




        return view('dashboard.manager.manager_more_update');
    }
    public function updated_ad(){


return view('dashboard.manager.manager');
    }

}
