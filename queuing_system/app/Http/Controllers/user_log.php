<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class user_log extends Controller
{
    //
    public function index(){
        $user_log= DB::table('user_log')->get();
        // dd( $user_log);
        $services = DB::table('services')->get();
        return view('dashboard.user_log.user_log',['user_log'=>$user_log,'services' => $services]);
    }
    public function manager_user(){

        return view('dashboard.manager_user.manager_user' );
    }

}
