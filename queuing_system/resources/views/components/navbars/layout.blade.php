<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('links')



    {{-- <link rel="stylesheet" href="../css/style.css"> --}}
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <div class="login">
        <div class="login-left">
            <div class="login-left-logo">
                <img src="{{url('../assets/images/logo/Logo alta.png')}}" alt="Logo ALT media commpy"/>

            </div>
            <div class="login-left-from">
                @yield('form')

            </div>
        </div>
        @yield('background_group')

    </div>

</body>
</html>
@yield('scripts')
