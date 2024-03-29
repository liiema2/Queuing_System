<?php

namespace App\Http\Controllers;
use App\Models\service;
use App\Models\devices;
use App\Models\orders;
// use App\Models\number_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class services extends Controller
{
    //
    public function details_new(Request $request){

        $status = $request->input('status');
        $keyword = $request->input('keyword');


        $query = DB::table('orders');
        if ($status !== null) {
            $query->where('status', $status);
        }

    if ($keyword !== null) {
        $query->where(function($query) use ($keyword) {
            $query->where('number_order', 'like', "%$keyword%")
                //   ->orWhere('servicename', 'like', "%$keyword%")
                  ->orWhere('status',  $keyword);
                //   ->orWhere('service', 'like', "%$keyword%");
        });
    }
        $orders= $query->get()->toArray();
return response()->json(['orders' => $orders]);

        // return response()->json(['orders' => $orders]);

    }
    public function index(Request $request){

        $status = $request->input('status');
        $keyword = $request->input('keyword');
        $query = DB::table('services');

        if ($status !== null) {
            $query->where('status',$status );
        }

    if ($keyword !== null) {
        $query->where(function($query) use ($keyword) {
            $query->where('servicecode', 'like', "%$keyword%")
                  ->orWhere('servicename', 'like', "%$keyword%")
                  ->orWhere('description', 'like', "%$keyword%");
                //   ->orWhere('service', 'like', "%$keyword%");
        });
    }
        $services= $query->get()->toArray();

        return response()->json(['service' => $services]);
    }
    public function new(Request $request){


        $services = DB::table('services')->get();
        return view('dashboard.service.service', ['services' => $services]);

    }

    public function store(Request $request){



        return view('dashboard.service.service_store' );

    }
    public function more(Request $request){

        // $check1 = $request->input('check1') ;
        // $check2 = $request->input('check2') ;
        // $check3 = $request->input('check3') ;
        // $check4 = $request->input('check4') ;

        $valuechek=3;
        $servicecode = $request->input('servicecode');
        $servicename = $request->input('servicename');
        $description = $request->input('description');


        // if ( $check1=='on')
        // {
        //     $valuechek +=1;
        // }
        // if ( $check2=="on")
        // {
        //     $valuechek+=2;
        // }
        // if ( $check3=="on")
        // {
        //     $valuechek+=4;
        // }
        // if ( $check4=="on")
        // {
        //     $valuechek+=8;
        // }

            $status =1;
        $lastService = Service::orderBy('id', 'desc')->first();

        $service = new Service();
     $order_service=  $service->id = ($lastService) ? $lastService->id + 1 : 1;
        $service->servicename = $servicename;
        $service->servicecode = $servicecode;
        $service->description = $description;
        $service->priority = $valuechek;
        $service->status =$status;


        $device = Devices::where('service', 'like', '%' . $service->servicename . '%')->first();
        if ($device) {
          $service->devices_id = $device->id;
        }


        $names = ['Lê Huỳnh Thái Vân','Huỳnh Ái vân','Lê Ái Vân','Trần Ái Vân','Phạm Mạng Huỳnh'];

        // shuffle the names array
        shuffle($names);
        $service->save();
        // select a random name
        // $username = $names[array_rand($names)];
        // $lastorder = orders::orderBy('id', 'desc')->first();
        // $lastorder = new Orders();
        // $lastorder->id = ($lastorder) ? $lastorder->id + 1 : 1;
        // $lastorder->username = $username;
        // $lastorder->service_id=$service;
        // $lastorder->device_id=$device->id;
        // if ($valuechek == 3) {
        //     $lastorder->provided_at = $servicecode.'0001';
        // }
        // $lastorder->status=$status;


        // $order_name = Devices::where('id', $device->id);
        // dd( $order_name);
        // if ($order_name) {
        //     $lastorder->source = $order_name->nameDevice;

        // }

        // $lastorder->created_at=now();
        // $lastorder->updated_at=now();

        // $$lastorde->save();
        $valuechek=3;
        $username = $names[array_rand($names)];
$lastorder = Orders::orderBy('id', 'desc')->first();
$new_order = new Orders();
// $new_order->id =  $lastorder->id ;
$new_order->username = $username;
$new_order->service_id =  $order_service;
$order_device = Service::where('id', $order_service)->first();
if ($order_device) {
    $devices_id = $order_device->devices_id;
    $new_order->service_id = $order_service;
  $sourcce = $devices_id;

}

if ($valuechek == 3) {
    $new_order->number_order = $servicecode.'0001';
}
$order_source = Devices::where('id', $sourcce)->first();

if ( $devices_id) {
    $namDevice = $order_source->nameDevice;
    $new_order->source = $namDevice;
    $new_order->device_id =  $sourcce;
} else {
    // handle the case when $sourcce is invalid
}

$new_order->status = $status;



$new_order->created_at = now();
$new_order->updated_at = now();

$new_order->save();

        $services = DB::table('services')->get();
        // return view('dashboard.service.service', ['services' => $services]);
        return redirect()->route('service',['services' => $services]);




    }
    public function details(Request $request ,$id){


        $services = DB::table('services')->where('id', $id)->first();
        $numerical_orders = DB::table('orders')->where('service_id', $id)->get();
// dd( $numerical_orders);
            // dd( $services);

        return view('dashboard.service.service_details', ['service' => $services,'numerical_orders' => $numerical_orders]);
        // return view('dashboard.service.service_details' );

    }
    public function more_service($id){

        // dd($id);
    return view('dashboard.service.service_updated',['id' => $id]);

    }
    public function more_serviced(Request $request ){
        $id = $request->input('id');
        $servicecode = $request->input('servicecode');
        $servicename = $request->input('servicename');
        $description = $request->input('description');
        DB::table('services')
        ->where('id', $id)
        ->update([
            'servicecode' => $servicecode,
            'servicename' => $servicename,
            'description' => $description
        ]);

    // Redirect to the service page
    $services = DB::table('services')->get();
    // return view('dashboard.service.service', ['services' => $services]);
    return redirect()->route('service',['services' => $services]);

    }

}
