<?php

namespace App\Http\Controllers;
use App\Models\service;
// use App\Models\number_order;
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
    public function more(Request $request){

        $check1 = $request->input('check1') ;
        $check2 = $request->input('check2') ;
        $check3 = $request->input('check3') ;
        $check4 = $request->input('check4') ;

$valuechek=0;
        $servicecode = $request->input('servicecode');
        $servicename = $request->input('servicename');
        $description = $request->input('description');


        if ( $check1=='on')
        {
            $valuechek +=1;
        }
        if ( $check2=="on")
        {
            $valuechek+=2;
        }
        if ( $check3=="on")
        {
            $valuechek+=4;
        }
        if ( $check4=="on")
        {
            $valuechek+=8;
        }


    //     $service = Service::where('servicecode', $servicecode)->first();
    //     $service->servicename = $servicename;
    //     $service->servicecode =  $servicecode;
    //     $service->description = $description;
    //     $service->priority =  $valuechek;
    //    $service->status=1;

    //     $service->save();

    $service = Service::where('servicecode', $servicecode)->firstOrFail();

    // Update the service model attributes
    $service->servicename = $servicename;
    $service->description = $description;
    $service->priority = $valuechek;
    $service->status = 1;
    $service->save();

    // Update the related number_order models
    foreach ($service->numericalOrders as $numberOrder) {
        $numberOrder->status = 1;
        $numberOrder->save();
    }
    foreach ($service->numericalOrders as $numberOrder) {




$numberOrder->status = 1;
        $numberOrder->save();
    }
    }
    public function details(Request $request ,$id){


        $services = DB::table('services')->where('id', $id)->first();
        $numerical_orders = DB::table('numerical_orders')->where('service_id', $id)->get();
// dd( $numerical_orders);
        return view('dashboard.service.service_details', ['service' => $services,'numerical_orders' => $numerical_orders]);
        // return view('dashboard.service.service_details' );

    }
    public function more_service(Request $request ,$id){

    return view('dashboard.service.service_store');

    }

}
