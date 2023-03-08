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
            <div class="menu-bar_list">
                <a href="" class="menuIconDashboard">
                    <img class="menuIconDashboard_iteam"src="{{ url('/assets/images/icons/element-4a.png') }}"
                        alt="">
                    <div> Dashboard</div>

                </a>
                {{--  --}}
                <a href="{{ route('device')}}" class="menuIconDashboard">

                    <img class="menuIconDashboard_iteam"src="{{ url('/assets/images/icons/monitor.png') }}"
                    alt="">
                <div>Thiết bị</div></a>



                <a href="" class="menuIconDashboard">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/Frame 332.png') }}"
                        alt="">
                    <div> Dịch vụ</div>
                </a>
                <a href="" class="menuIconDashboard">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/icon dasboard03.png') }}"
                        alt="">
                    <div> Cấp số</div>
                </a>
                <a href=""class="menuIconDashboard">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/Frame.png') }}"
                        alt="">
                    <div>Báo cáo</div>
                </a>
                <a href=""class="menuIconDashboard">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/setting.png') }}"
                        alt="">
                    <div>Cài đặt hệ thống
                    </div>
                </a>
                <a href="{{route('logout')}}"class="menuIconDashboard">
                    <img class="menuIconDashboard_iteam" src="{{ url('/assets/images/icons/fi_log-out.png') }}"
                        alt="">
                    <div> Đăng xuất
                    </div>
                </a>






            </div>
        </div>

        <div class="menudashboard">
            @yield('content')

            <div class="menudashboard_body">

                {{-- @yield('informations') --}}
            </div>
            @yield('content_end')

        </div>



    </div>
    @yield('foter_end')

</body>

</html>
@yield('scripts')
