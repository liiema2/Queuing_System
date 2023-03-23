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

        $services = DB::table('services')->get();
        return view('dashboard.number_order.number_order',['number_order'=>$number_order, 'services' => $services] );
    }
    public function indexnew(Request $request ){

    $status = $request->input('status');
    $keyword = $request->input('keyword');
    $service_id = $request->input('service_id');
    $source = $request->input('source');

    $query = DB::table('orders');
if ($status !== null) {
    $query->where('status', $status);
}
if ($source !== null) {
    $query->where('source','like', "%$source%");
}

if ($keyword !== null) {
    $query->where(function($query) use ($keyword) {
        $query->where('status', $keyword)
              ->orWhere('source', 'like', "%$keyword%");
    });
}

// dd($query->toSql()); // Debug query string
$orders = $query->get()->toArray();

    return response()->json(['orders' => $orders]);
}
    public function more(){

        // dd($number_order);
        return view('dashboard.number_order.number_more' );
    }
    public function update(Request $request){






        $number_order = $request->input('number_order');
        $number_order_name=   $number_order;
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
        $order_number_last = orders::where('service_id', $service_id)->latest('number_order')->value('number_order');
        $order_number = $orders->first()->number_order;

        $order_number_service = $orders->first()->service_id;
        $order_number_device = $orders->first()->device_id;
        $order_number_source = $orders->first()->source;

        $names = ['Lê Huỳnh Thái Vân','Huỳnh Ái vân','Lê Ái Vân','Trần Ái Vân','Phạm Mạng Huỳnh'];
        $lastOrder = orders::latest('id')->first();
        $nextId = $lastOrder->id + 1;

        $update = new  orders();
        $update->id=$nextId;
        $update->number_order=$order_number_last+1;
        $update->username= $names[array_rand($names)];
        $update->service_id=  $order_number_service;
        $update->device_id=  $order_number_device;
        $update->status= 1;
        $update->source=  $order_number_source;
        // $update->create_at=  now();
        // $update->source=  $order_number_source;

    $update->save();
    $number_order= DB::table('orders')->get();

   $numbernew= $order_number_last+1;

   $number_order_time = orders::where('number_order', $numbernew)->first();
$created_at = $number_order_time ->created_at;
$created_at_formatted = date(' H:i d/m/y', strtotime($created_at));
$created_at_plus_3_hours = date('Y-m-d H:i:s', strtotime($created_at . ' +3 hours'));
$created_at_formatted_new = date('H:i d/m/y', strtotime($created_at_plus_3_hours));
// $created_at_let =$created_at

    return view('dashboard.number_order.number_more_get',['number_order'=>$number_order,'number_new'=>$numbernew,'created'=>$created_at_formatted,'created_end'=>$created_at_formatted_new,'name'=>$number_order_name]  );
    }


}
