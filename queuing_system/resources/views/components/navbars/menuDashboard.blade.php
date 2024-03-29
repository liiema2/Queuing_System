{{-- @extends('layout_degisn_login') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/css/menu/menu.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    @yield('links')
    <title>Document</title>
</head>

<body>
    <div id="main">
        <div class="menubar">
            <div class="menubar_logo">
                <img src="{{ url('/assets/images/logo/Logo alta.png') }}" alt="Alta Media Company">
            </div>
            <div class="menu-bar_list dashboard">
                <a href="{{route('dashboard')}}" class="menuIconDashboard Dashboard_d1esging" >
                    <img class="menuIconDashboard_iteam dashboard_img" src="{{ url('/assets/images/icons/element-4a.png') }}"
                        alt="">
                    <div> Dashboard</div>

                </a>
                {{--  --}}
                <a href="{{ route('device')}}" class="menuIconDashboard dervice_d1esging">

                    <img class="menuIconDashboard_iteam"src="{{ url('/assets/images/icons/monitor.png') }}"
                    alt="">
                <div>Thiết bị</div></a>



                <a href="{{ route('service')}}" class="menuIconDashboard service_d1esging">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/Frame 332.png') }}"
                        alt="">
                    <div> Dịch vụ</div>
                </a>
                <a href="{{ route('number_order')}}" class="menuIconDashboard numberorder_d1esging">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/icon dasboard03.png') }}"
                        alt="">
                    <div> Cấp số</div>
                </a>
                <a href="{{ route('notify')}}"class="menuIconDashboard ornumberorder_d1esging">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/Frame.png') }}"
                        alt="">
                    <div>Báo cáo</div>
                </a>
                <a href=""class="menuIconDashboard menuIconDashboard_iteam_system">
                    <img class="menuIconDashboard_iteam " src="{{ url('/assets/images/icons/setting.png') }}"
                        alt="">
                    <div>Cài đặt hệ thống

                        <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/fi_more-vertical.png') }}">
                    </div>




                </a>
                <a href="{{route('logout')}}"class="menuIconDashboard Dashboard_design">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/fi_log-out.png') }}"
                        alt="">
                    <div> Đăng xuất
                    </div>
                </a>






            </div>
        </div>

        {{-- <div class="menuIconDashboard_iteam_option"   style="display:none" >
            <div> <a href="">Quản lý vai trò</a> </div>
            <div> <a href="">Quản lý tài khoản </a></div>
            <div> <a href="">Nhật ký người dùng</a></div>
        </div> --}}
        <div class="menudashboard">
            @yield('content')

            <div class="menudashboard_body">

                {{-- @yield('informations') --}}
            </div>
            @yield('content_end')

        </div>



    </div>

    @yield('foter_end')


    <div class="menu-menuIconDashboard_iteam_option"></div>
    @php

      $order= DB::table('orders')->get();
    @endphp
    <div class="menuIconDashboard_iteam_option" style="display:none" >
        <div> <a href="{{route('administer')}}">Quản lý vai trò</a> </div>
        <div> <a href="{{route('manager_user')}}">Quản lý tài khoản </a></div>
        <div> <a href="{{route('user_log')}}">Nhật ký người dùng</a></div>
    </div>
    <div class="bell" style="display:none" >
       <div class="bell_head">Thông báo</div>

            <div class="bell_body-scroll">


                @foreach($order as $oder)

                <div class="bell_body">
                    <div>Người dùng: {{$oder->username}}</div>
                    <div>Thời gian nhận số: {{date('H:i \n\g\à\y d/m/Y', strtotime($oder->created_at))}}</div>
                </div>

                @endforeach
            </div>
       </div>

    </div>


</body>

</html>
@yield('scripts')

<script>
const menuIconDashboardIteamSystem = document.querySelector('.menu-menuIconDashboard_iteam_option');
const menuIconDashboardIteamOption = document.querySelector('.menuIconDashboard_iteam_option');

menuIconDashboardIteamSystem.addEventListener('mouseover', function() {
  menuIconDashboardIteamOption.style.display = 'block';
});

menuIconDashboardIteamOption.addEventListener('mouseover', function() {
  menuIconDashboardIteamOption.style.display = 'block';
});

// menuIconDashboardIteamSystem.addEventListener('mouseout', function() {
//   menuIconDashboardIteamOption.style.display = 'none';
// });

menuIconDashboardIteamOption.addEventListener('mouseout', function() {
  menuIconDashboardIteamOption.style.display = 'none';
});



$('.bell_backgroud').click(function() {
  $('.bell').toggle();
});



</script>




