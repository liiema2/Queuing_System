@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Danh sách thiết bị</div> </div>
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




</div>

<div>



</div>

<div class="informtion_page">

<div>Danh sách thiết bị</div>

<div class="informtion_page_connter">

<div class="informtion_page_connter_first">Thông tin thiết bị</div>

<div>
    <div class="container">
        <div class="row">
          <div class="col-md-5">
            <label for="input1">Mã thiết bị : <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input1" name="input1" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input2">Loại thiết bị: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <select id="input2" name="input2" class="form-control" >
                <option value="kiosk">Kiosk</option>
                <option value="display-counter">Display Counter</option>
            </select>

          </div>
          <div class="col-md-5">
            <label for="input3">Tên thiết bị: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input3" name="input3" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input4">Tên đăng nhập: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input4" name="input4" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input5">Địa chỉ IP:<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input5" name="input5" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input5">Mật khẩu:<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input5" name="input5" class="form-control">
          </div>
        </div>
         <div class="row">
            <div class="col-md-10">
                <label for="input7">Dịch vụ sử dụng: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
                <textarea id="input7" name="input7" class="form-control" rows="1"></textarea>
            </div>

         </div>

         <div class="row">
            <div class="col-md-5"><img src="" alt=""> <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt="">là trường Thông tin bắt buột </div>

         </div>
      </div>


</div>

</div>
<div class="button_2_add_cancel">
    <div class="row_2">
        <div class="col-md-6_cancel">
          <a href="">Hủy Bỏ</a>
        </div>
        <div class=" col-md-6_continew">
         <a href="">Tiếp Tục</a>
        </div>
      </div>
    </div>
@endsection


@section('scripts')
<script>
  var showPasswordButton = document.querySelector('.show-password-button');
    var passwordInput = document.querySelector('.form-input-pw');

    showPasswordButton.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';

      } else {
        passwordInput.type = 'password';

      }
    });
</script>
@endsection
