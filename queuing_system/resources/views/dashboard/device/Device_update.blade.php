@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/device/update.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('device')}}">Danh sách thiết bị</a> </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""><div>Cập nhật thiết bị</div> </div>
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

<div class="informtion_page--Orange">Danh sách thiết bị</div>

<div class="informtion_page_connter">

<div class="informtion_page_connter_first">Thông tin thiết bị</div>

<div>
    <div class="container">
        {{-- action="{{route('update_check',['id' => $device->id])}}" --}}

        <form action="{{route('update_device',['id' => $device->id])}}" method="POST" >
            @csrf
        <div class="row">
            <div class="col-md-5">
              <label for="input1">Mã thiết bị : <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""> </label>
              <input type="text" value="{{ $device->code }}" id="input1" name="code" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input2">Loại thiết bị: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt="">{{ $device->name }}</label>
              <select id="input2" value="{{ $device->name }}" name="name" class="form-control" >
                  <option value="kiosk">Kiosk</option>
                  <option value="display-counter">Display Counter</option>
              </select>

            </div>
            <div class="col-md-5">
              <label for="input3">Tên thiết bị: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text" id="input3" value="{{ $device->nameDevice }}" name="nameDevice" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input4">Tên đăng nhập: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text" id="input4" value="{{ $device->username }}" name="username" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input5">Địa chỉ IP:<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text" id="input5" value="{{ $device->ip_address }}" name="ip_address" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input5">Mật khẩu:<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text" id="input6" value="{{ $device->password }}" name="password" class="form-control">
            </div>

            <div class="col-md-10 form-group">
              <label for="input7">Dịch vụ sử dụng: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              @php
              $services = explode(',', $device->service);
          @endphp
    <div class="update_devices_change-orange">
          @foreach ($services as $service)

            <select id="input1" class="form-control form-control-design-color-bg" name="service[]"rows="1">
                <option value="">{{ trim($service) }}</option>
                <option value="Khám răng hàm">Khám răng hàm</option>
                <option value="Khám tai mũi họng" >Khám tai mũi họng</option>

            </select>



            {{-- parse_str(html_entity_decode($serviceStr), $services); --}}
          @endforeach
        </div>
            <div class="button_2_add_cancel">
                <div class="row_2">
                    <div class="col-md-6_cancel">
                      <a href="{{route('device')}}">Hủy Bỏ</a>
                    </div>
                    <div class=" col-md-6_continew">
                        <button id="submit-form" type="submit" class="btn btn-primary">Thêm thiết bị</button>

                    </div>
                  </div>
                </div>
    </form>



        </div>
        <div class="row">
            <div class="col-md-5 col-md-5-design"> <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""> Là trường Thông tin bắt buộc </div>

         </div>
      </div>


</div>

</div>

@endsection

@section('scripts')
<script>
    // document.getElementById("submit-form").addEventListener("click", function(e) {
    //   e.preventDefault(); // prevent default behavior of clicking on an <a> tag

    //   // get the form element and submit it
    //   var form = document.querySelector('.form_update');
    //   form.submit();
    // });
  </script>

@endsection
