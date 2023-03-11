@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thông tin cá nhân </div>
    <div class="nvarContent_right">
        <div>
            <div class="bell_backgroud">
                <img src="{{ url('/assets/images/icons/notification.png') }}" alt="">

            </div>

                <a class="user_infor" href="{{route('user')}}
                "> <img class="imgas_user" src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2Q.png') }}"
                alt="">

            <div class="nvarContent_right-xc">
                <div>xin chào</div>
                <div> <a href="{{route('user')}}">Lê Quỳnh Ái Vân</a> </div>
            </div></a>


        </div>



    </div>

</div>

<div class="informtion_user">

        <div><img src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2L.png') }}" alt="">

            <div>{{ session('name') }}</div>
        </div>

     <div class="informtion_user__form">
            <div class="informtion_user__form-left">
                    <p>Tên người dùng:</p>
                <div> <input type="text" value="{{ session('name') }}"> </div>
                    <p>Số điện thoại:</p>
                <div> <input type="text" value="{{ session('phone_number') }}"> </div>
                    <p>Email:</p>
                <div> <input type="text" value="{{ session('email') }}"></div>

            </div>
            <div class="informtion_user__form-left">
                    <p>Tên đăng nhập:</p>
                <div> <input type="text" value="{{ session('username') }}" ></div>
                    <p>Mật khẩu:</p>
                <div> <input type="text" value="{{ session('password') }}">  </div>
                    <p>Vai trò:</p>
                <div> <input type="text" value="{{ session('role') }}"></div>

            </div>


     </div >
     <div class="camera--orage"> <img src="{{ url('/assets/images/users/Vector (3).png') }}" alt=""></div>

</div>

<div>



</div>
@endsection
