@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/service/service_details.css') }}">


<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('device')}}">Danh sách dịch vụ</a> </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""><div>Thêm dịch vụ</div> </div>
    <div class="nvarContent_right">
        <div>
            <div class="bell_backgroud">
                <img src="{{ url('/assets/images/icons/notification.png') }}" alt="">

            </div>

                <a class="user_infor" href="
                "> <img class="imgas_user" src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2Q.png') }}"
                alt="">

            <div class="nvarContent_right-xc">
                <div>xin chào</div>
                <div> <a href="">Lê Quỳnh Ái Vân</a> </div>
            </div></a>


        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">

    <div class="informtion_page_connter_first">Thông tin thiết bị</div>


        <div class="service_details">


            <div class="service_details_left">

<div>Thông tin dịch vụ</div>
<div>Mã dịch vụ</div>
<div>Tên dịch vụ</div>
<div>Mô tả</div>

<div>Quy tắc cấp số</div>
<div>Tăng tự động</div>
<div>Prefix</div>
<div>Reset theo ngày</div>
<div>ví dụ: 201-2001</div>

            </div>
            <div class="service_details_right">

                <div></div>


                <div>


                </div>
            </div>
        </div>


</div>

</div>

@endsection

@section('scripts')
<script>

  </script>

@endsection
