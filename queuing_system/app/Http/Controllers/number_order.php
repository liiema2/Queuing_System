<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\devices;
use App\Models\orders;
class number_order extends Controller
{
    //

    public function index(){
        $number_order= DB::table('orders')->get();
        // dd($number_order);
        return view('dashboard.number_order.number_order',['number_order'=>$number_order] );
    }
    public function more(){

        // dd($number_order);
        return view('dashboard.number_order.number_more' );
    }
    public function update(Request $request){






        $number_order = $request->input('number_order');
            // dd($number_order );
$service = Service::where('servicename', 'like', $number_order )->first();
if ($service) {
    $service_id = $service->id;
    // Do something with $service_id here

} else {
    // Handle the case where no matching service is found

}

        // dd($service_id);
        $orders = orders::where('service_id', $service_id)->get();
        $order_number = $orders->first()->number_order;
        $order_number_service = $orders->first()->service_id;
        $order_number_device = $orders->first()->device_id;
        $order_number_source = $orders->first()->source;

        $names = ['Lê Huỳnh Thái Vân','Huỳnh Ái vân','Lê Ái Vân','Trần Ái Vân','Phạm Mạng Huỳnh'];
        $lastOrder = orders::latest('id')->first();
        $nextId = $lastOrder->id + 1;

        $update = new  orders();
        $update->id=$nextId;
        $update->number_order= $order_number+1;
        $update->username= $names[array_rand($names)];
        $update->service_id=  $order_number_service;
        $update->device_id=  $order_number_device;
        $update->status= 1;
        $update->source=  $order_number_source;
        // $update->create_at=  now();
        // $update->source=  $order_number_source;

    $update->save();
    return view('dashboard.number_order.number_more' );
    }


}
