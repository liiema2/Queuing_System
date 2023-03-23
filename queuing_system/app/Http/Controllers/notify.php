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


        $services = DB::table('services')->get();
        return view('dashboard.ordinalNumber.ordinalNumber',['number_order'=>$number_order, 'services' => $services] );
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
    public function mores(Request $request){

        $role = $request->input('role');
        $description = $request->input('description');
        $name = uniqid();
        DB::table('accounts')->insert([
            'name' => $name,
            'username' => $name,
            'phone_number' => 12324645,
            'email' => $name,
            'password' => 123245,
            'role' => $role,
            'description' => $description,
        ]);
        $number_order = DB::table('accounts')->get();

        return view('dashboard.manager.manager',['account' => $number_order]);
    }
    public function update_ad($id){

        $number_order= DB::table('accounts')->where('id',$id)->first();
        // dd( $number_order);

        return view('dashboard.manager.manager_more_update',['account'=>$number_order]);
    }
    public function updated_ad(Request $request){

            $id = $request->input('id');
        $role = $request->input('role');
        $description = $request->input('description');

    DB::table('accounts')
    ->where('id', $id)
    ->update(['role' => $role, 'description' => $description]);
// dd($id ,$role, $description);
$number_order = DB::table('accounts')->get();
return view('dashboard.manager.manager',['account' => $number_order]);
    }

}
