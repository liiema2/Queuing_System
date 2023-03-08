<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class Devices extends Controller
{
    //

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
            'password' => $user->password,
            'role' => $user->role
        ]);
    }
    // dd($username);
    // dd(session()->all());
        return view('dashboard.index');
    }
    public function new(Request $request){

        // return 'ok';

        if ($request->ajax()) {
            $users = DB::table('devices');

            // Lọc theo trạng thái hoạt động
            if ($request->filled('filter-status')) {
                $status = $request->input('filter-status');
                $users->where('status', $status);
            }

            // Lọc theo trạng thái kết nối
            if ($request->filled('filter-connection')) {
                $connection = $request->input('filter-connection');
                $users->where('connection', $connection);
            }

            // Lọc theo từ khóa
            if ($request->filled('filter-keyword')) {
                $keyword = $request->input('filter-keyword');
                $users->where(function ($query) use ($keyword) {
                    $query->where('name', 'like', "%$keyword%")
                        ->orWhere('email', 'like', "%$keyword%");
                });
            }

            return DataTables::of($users)->make(true);
        }

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

    }
    public function updated(Request $request, $id) {




    $attributes = $request->validate([
        'code' => 'required',
        'name' => 'required',
        'nameDevice' => 'required',
        'username' => 'required',
        'ip_address' => 'required',
        'password' => 'required',
        'service' => 'required'
    ]);

    $device = DB::table('devices')->find($id);
    $device->code = $attributes['code'];
    $device->name = $attributes['name'];
    $device->nameDevice = $attributes['nameDevice'];
    $device->username = $attributes['username'];
    $device->ip_address = $attributes['ip_address'];
    $device->password = Hash::make($request->password);
    $device->service = $attributes['service'];
    $device->save();

    return redirect()->route('device');
    }
}
