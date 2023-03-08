@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">

<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thông tin cá nhân</div>
    <div class="nvarContent_right">
        <div>
            <img src="{{ url('/assets/images/icons/notification.png') }}" alt="">

            <img class="imgas_user" src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2Q.png') }}"
                alt="">

            <div class="nvarContent_right-xc">
                <div>xin chào</div>
                <div>{{ session('username')}}</div>
            </div>

        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">



</div>
@endsection


