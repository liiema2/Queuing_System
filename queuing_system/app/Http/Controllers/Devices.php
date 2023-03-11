<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Device;
class Devices extends Controller
{
    //
    public function updated(Request $request, $id)
{

    $validatedData = [
        'code' => $request->input('code'),
        'name' => $request->input('name'),
        'nameDevice' => $request->input('nameDevice'),
        'username' => $request->input('username'),
        'ip_address' => $request->input('ip_address'),
        'password' => $request->input('password'),
        'service' => $request->input('service'),
    ];
    $services = $request->input('service');
    $serviceStr = implode(',', $services);
DB::table('devices')
    ->where('id', $id)
    ->update([
        'code' => $validatedData['code'],
        'name' => $validatedData['name'],
        'nameDevice' => $validatedData['nameDevice'],
        'username' => $validatedData['username'],
        'ip_address' => $validatedData['ip_address'],
        'password' => $validatedData['password'],
        'service' =>  $serviceStr
    ]);


return redirect()->route('device')->with('success', 'Cập nhật thiết bị thành công');
}

    function index(Request $request)
    {
        $status = $request->input('status');
        $connection = $request->input('connection');
        $keyword = $request->input('keyword');


{
    $status = $request->input('status');
    $connection = $request->input('connection');
    $keyword = $request->input('keyword');

    $query = DB::table('devices');

    if ($status !== null) {
        $query->where('status', $status);
    }

    if ($connection !== null) {
        $query->where('connection', $connection);
    }

    if ($keyword !== null) {
        $query->where(function($query) use ($keyword) {
            $query->where('code', 'like', "%$keyword%")
                  ->orWhere('nameDevice', 'like', "%$keyword%")
                  ->orWhere('ip_address', 'like', "%$keyword%")
                  ->orWhere('service', 'like', "%$keyword%");
        });
    }

    $devices = $query->get()->toArray();

    return response()->json(['devices' => $devices]);
}
    }
    public function store(){

        return view('dashboard.device.device');
    }
    public function show(){

        $username = session('username');
    $user = DB::table('accounts')->where('name', $username)->first();
    if ($user) {
        session([
            'name' => $user->name,
            'username' => $user->username,
            'phone_number' => $user->phone_number,
            'email' => $user->email,
            // 'password' => $user->password,
            'role' => $user->role
        ]);
    }

        return view('dashboard.index');
    }
    public function new(Request $request){


        $devices = DB::table('devices')->get();
        return view('dashboard.device.device', ['devices' => $devices]);

    }
    public function details($id) {
        // dd($id);

        $device = DB::table('devices')->where('id', $id)->first();
        return view('dashboard.device.device_details', ['device' => $device]);
    }
    public function update($id) {


        $device = DB::table('devices')->where('id', $id)->first();
        return view('dashboard.device.device_update', ['device' => $device]);
        // return  "ok";
    }
    public function updated_ed(Request $request, $id) {


        // $validatedData = $request->validate([
        //     'code' => 'required',
        //     'name' => 'required',
        //     'nameDevice' => 'required',
        //     'username' => 'required',
        //     'ip_address' => 'required',
        //     'password' => 'required',
        //     'service' => 'required'
        // ]);

        // $device = DB::table('devices')->findOrFail($id);
        // $device->code = $validatedData['code'];
        // $device->name = $validatedData['name'];
        // $device->nameDevice = $validatedData['nameDevice'];
        // $device->username = $validatedData['username'];
        // $device->ip_address = $validatedData['ip_address'];
        // $device->password = $validatedData['password'];
        // $device->service = $validatedData['service'];
        // $device->save();

        // return redirect()->route('device')->with('success', 'Cập nhật thiết bị thành công');


//              // Kiểm tra xem thiết bị có tồn tại trong database không
//    $device = DB::table('devices')->findOrFail($id);

//    // Cập nhật các thông tin của thiết bị với dữ liệu mới từ form
//    $device->code = $request->input('code');
//    $device->name = $request->input('name');
//    $device->nameDevice = $request->input('nameDevice');
//    $device->username = $request->input('username');
//    $device->ip_address = $request->input('ip_address');
//    $device->password = $request->input('password');
//    $device->service = $request->input('service');
//    $device->save();

//    // Chuyển hướng về trang danh sách thiết bị
//    return redirect()->route('device');

return "ok";
    }

//     public function reload(Request $request)
// {
//     $status = $request->input('status');
//     $connection = $request->input('connection');
//     $keyword = $request->input('keyword');

//     $devices = DB::table('devices')
//     ->when($status !== '', function($query) use ($status) {
//         $query->where('status', $status);
//     })
//     ->when($connection !== '', function($query) use ($connection) {
//         $query->where('connection', $connection);
//     })
//     ->when($keyword !== '', function($query) use ($keyword) {
//         $query->where(function($query) use ($keyword) {
//             $query->where('code', 'like', "%$keyword%")
//                   ->orWhere('nameDevice', 'like', "%$keyword%")
//                   ->orWhere('ip_address', 'like', "%$keyword%")
//                   ->orWhere('service', 'like', "%$keyword%");
//         });
//     })
//     ->get();

// return view('devices.device.device', compact('devices'));
// }



}
