@extends('components.navbars.layout')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/style-login.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/style-login-fogetpw.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/session/error.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

@endsection
@section('form')
    <div class="from-forgetpw-content">

        <div class="from-forgetpw-content__first">Đặng lại mật khẩu mới </div>

        <form action="{{ route('reset_chaged', ['email' => $email]) }}" method="POST">
        @csrf
            <div class="row">
                <div class="password_position">
                    <label for="">Mật khẩu *</label>
                    <input type="password" name="password" value="{{'123456'}}" class="form-input-pw">
                    <button type="button" class="show-password-button">
                        <img src="{{url('../assets/images/Vector.png')}}" alt="">

                    </button>

                    </div>
                    <div class="password_position">
                        <label for="">Nhập lại Mật Khẩu</label>
                        <input type="password" name="password1" value="{{'123456'}}" class="form-input-pw">
                        <button type="button" class="show-password-button">
                            <img src="{{url('../assets/images/Vector.png')}}" alt="">

                        </button>

                        </div>

            </div>


        <button class="from-forgetpw-content-btn">
            Tiếp Tục

        </button>
        </form>



    </div>
@endsection


@section('background_group')
<div class="from-forgetpw-backgroup">
    <img src="{{url('../assets/images/backgroud/Frame.png')}}" alt="Logo ALT media commpy"/>

</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".show-password-button").click(function() {
            var passwordInput = $(this).prev();
            if (passwordInput.attr("type") === "password") {
                passwordInput.attr("type", "text");
            } else {
                passwordInput.attr("type", "password");
            }
        });
    });
</script>

@endsection
