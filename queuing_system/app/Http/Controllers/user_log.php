<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class user_log extends Controller
{
    //
    public function index(){
        $user_log= DB::table('user_log')->get();
        // dd( $user_log);
        $services = DB::table('services')->get();
        return view('dashboard.user_log.user_log',['user_log'=>$user_log,'services' => $services]);
    }
    public function ajax_index(Request $request){


        $keyword = $request->input('keyword');

        $query = DB::table('user_log');

        if ($keyword !== null) {
            $query->where(function($query) use ($keyword) {
                $query->where('username', 'like', "%$keyword%")
                      ->orWhere('ip_address', 'like', "%$keyword%")
                      ->orWhere('action', 'like', "%$keyword%");
            });
        }

        $logs = $query->get()->toArray();

        return response()->json(['logs' => $logs]);
    }
    public function manager_user(){
        $account = DB::table('accounts')->get();

        return view('dashboard.manager_user.manager_user',['account'=>$account] );
    }
    public function manager_more(){


        return view('dashboard.manager_user.manager_user_more');
    }
    public function update(Request $request){


        DB::table('accounts')->insert([
            'name' => $request->name,
            'email' =>  $request->email,
            'username' => $request->nameuser,
            'phone_number' => $request->phone_number,
            'status' => $request->status,
            'role' => $request->role,

            'password' => bcrypt($request->password),
        ]);



        $account = DB::table('accounts')->get();

        return view('dashboard.manager_user.manager_user',['account'=>$account] );
    }
    public function updated(Request $request,$id){


        DB::table('accounts')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'email' =>  $request->email,
            'username' => $request->nameuser,
            'phone_number' => $request->phone_number,
            'status' => $request->status,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        $account = DB::table('accounts')->get();

        return view('dashboard.manager_user.manager_user',['account'=>$account] );
    }
    public function newupdated(Request $request,$id){

// dd($id);
      $account=  DB::table('accounts')
        ->where('id', $id)->first();

        // dd(      $account);
        // $account = DB::table('accounts')->get();

        return view('dashboard.manager_user.manager_user_update',['account'=>$account] );
    }
    public function ajax(Request $request){

        $status = $request->input('status');

        $keyword = $request->input('keyword');

        $query = DB::table('accounts');

        if ($status !== null) {
            $query->where('status', $status);
        }
        if ($keyword !== null) {
            $query->where(function($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%")
                      ->orWhere('username', 'like', "%$keyword%")
                      ->orWhere('phone_number', 'like', "%$keyword%")
                      ->orWhere('email', 'like', "%$keyword%")
                      ->orWhere('role', 'like', "%$keyword%")
                      ->orWhere('status',$keyword );
            });
        }

        $account = $query->get()->toArray();

        return response()->json(['accounts' => $account]);



    }




}
