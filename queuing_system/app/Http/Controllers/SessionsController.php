<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use  Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use app\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class SessionsController extends Controller
{

    //
    public function    create(Request $request)
    {

//         $email = request()->input('email');
// $user = DB::table('users')->where('email', $email)->first();

// if ($user) {
//     return "ok";
// } else {
//   return "error";
// }
    // return "error";
        return view('sessions.create');

        //  return redirect()->route('login');
    }
    public function error()
    {
        return view('sessions.error_login');
    }
    public function login()
    {
        return view('dashboard.index');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // dd($attributes);
        // if (! auth()->attempt($attributes)) {
        //     throw ValidationException::withMessages([
        //         'name' => 'Your provided credentials could not be verified.'

        //     ]);
        //     return redirect()->route('error_login');
        // }

        try {
            if (!auth::attempt($attributes)) {
                throw ValidationException::withMessages([
                    'name' => 'Your provided credentials could not be verified.'
                ]);
            }
            $username = $request->input('username');
            $user = User::where('username', $username)->first();
            // Đăng nhập thành công, chuyển hướng đến trang chính.
            if ($user) {
                $name = $user->name;
                session(['username' => $name]);
            }
            return redirect('/dashboard');
        } catch (ValidationException $e) {
            // Xác thực thông tin đăng nhập thất bại, chuyển hướng đến trang lỗi.
            return redirect('error');
        }

        // session()->regenerate();



    }
    public function check_email()
    {

        $attributes = request()->validate([
            'email' => 'required|email|max:255|unique:accounts,email',

        ]);

        dd($attributes);
        // if (! auth()->attempt($attributes)) {
        //     throw ValidationException::withMessages([
        //         'name' => 'Your provided credentials could not be verified.'

        //     ]);
        //     return redirect()->route('error_login');
        // }

        try {
            if (!auth::attempt($attributes)) {
                throw ValidationException::withMessages([
                    'name' => 'Your provided credentials could not be verified.'
                ]);
            }

            // Đăng nhập thành công, chuyển hướng đến trang chính.
            return route('session.password.reset');
        } catch (ValidationException $e) {
            // Xác thực thông tin đăng nhập thất bại, chuyển hướng đến trang lỗi.
            // return redirect('error');
        }

        // session()->regenerate();



    }

    public function show(Request $request)
    {




        return view('sessions.password.verify');
    }
    public function destroy()
    {
        // Delete the user's session data from the server
        auth()->logout();

        // Delete the laravel_session cookie from the user's browser
        $cookie = Cookie::forget('laravel_session');
        return redirect()->route('login');
    }

    public function update(Request $request, $email)
{

    // $request->validate([
    //     'password' => 'required|min:6|confirmed',
    // ]);




    // $user = DB::table('accounts')->where('email', $email)->first();
    // if ($user) {
    //     DB::table('accounts')->where('email', $email)->update([
    //         'password' => Hash::make($request->password),
    //     ]);

    //     return redirect('/dashboard');
    // //   return  redirect()->route('login');
    // } else {
    //     // return
    //     return redirect('/dashboard');
    //     // redirect()->route('verify')->with('error', 'Email không tồn tại!');
    // }
    $user = DB::table('accounts')->where('email', $email)->first();
    if ($user) {
        DB::table('accounts')->where('email', $email)->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    } else {
        return redirect('/dashboard');
    }


}

    public function reset(Request $request)
    {

        $email = request()->input('email');
$user = DB::table('accounts')->where('email', $email)->first();

if ($user) {
    return view('sessions.password.reset_error', ['email' => $email]);
} else {
//   return "error";
  return view('sessions.password.reset_error-email', ['email' => $email]);
//   chưa làm trang error
}

    }
}
