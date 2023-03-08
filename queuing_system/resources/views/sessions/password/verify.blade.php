@extends('components.navbars.layout')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/style-login.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/style-login-fogetpw.css') }}">
@endsection
@section('form')
    <div  class="from-forgetpw-content">

        <div class="from-forgetpw-content__first">Đặng lại mật khẩu  </div>
        <div class="from-forgetpw-content__small" >Vui lòng nhập email để đăng nhập mật khẩu của bạn *</div>
        <form acction="{{route('reset')}}" method="post" class="from-forgetpw">
            @csrf
            <input class="from-forgetpw-content-input" name="email" type="text">
            {{--  --}}
            <a  href="{{ route('login')}}" >
            <button type="button" class="from-forgetpw-content-btn-cancel">

            Hủy
            </button>
        </a>
        {{-- href="{{route('verify')}}" --}}
        {{-- href="{{route('resert')}}" --}}
        {{--  --}}
        <a  >
            <button  type="submit" class="from-forgetpw-content-btn">
               Tiếp Tục


            </button>
        </a>
        </form>



    </div>
@endsection


@section('background_group')
<div class="from-forgetpw-backgroup">
    <img src="{{url('../assets/images/backgroud/Frame.png')}}" alt="Logo ALT media commpy"/>

</div>
@endsection

