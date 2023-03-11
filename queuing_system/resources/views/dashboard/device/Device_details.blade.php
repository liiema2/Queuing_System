@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_details.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/menu.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="">Danh sách thiết bị</a>  </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Chi tiết thiết bị</div> </div>
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
          <div class="col-md-5 details">
            <div>
                Mã thiết bị:

             </div>
             <div>
                {{ $device->code }}
             </div>
          </div>
          <div class="col-md-5 details">

            <div>
             Loại thiết bị:

             </div>
             <div>
                {{ $device->name }}
             </div>

          </div>
          <div class="col-md-5 details">

            <div>
               Tên thiết bị:

             </div>
             <div>
                {{ $device->nameDevice }}
             </div>

          </div>
          <div class="col-md-5 details">

            <div>
                Tên Đăng nhập:

             </div>
             <div>
                {{ $device->username }}
             </div>

          </div>
          <div class="col-md-5 details">

            <div>

Dịa chỉ IP:
             </div>
             <div>
                {{ $device->ip_address}}
             </div>

          </div>
          <div class="col-md-5 details">

            <div>
                Mật khẩu:

             </div>
             <div>
                {{ $device->password}}
             </div>

          </div>

          <div class="col-md-7 details">
            <div>
               Dịch vụ sử dụng

             </div>
             <div>
                {{ $device->service}}
             </div>
          </div>
        </div>
 </div>
</div>
</div>

</div>
<div class="button_add">
<a href="{{route('update_devices',['id' => $device->id])}}">
    <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
</a>
Cập nhật thiết bị
</div>
@endsection

@section('scripts')
<script>





</script>
@endsection
