<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class services extends Controller
{
    //
    public function index(){
        return view('dashboard.list.device');
    }
    public function new(Request $request){


        $services = DB::table('services')->get();
        return view('dashboard.service.service', ['services' => $services]);

    }

    public function store(Request $request){



        return view('dashboard.service.service_store' );

    }
}
