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
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('number_order')}}">Danh sách Cấp số</a>  </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Chi tiết </div> </div>
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

<div>Quản lý cấp số </div>

<div class="informtion_page_connter">


        <div class="informtion_page_connter_first">Thông tin cấp số</div>
 <div>

    <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 details">
            <div style="width:300px">
              Họ tên

             </div>
             <div>
                {{$number_order->username}}

             </div>
          </div>
          <div class="col-md-6 details">

            <div style="width:300px">
        Nguồn cấp

             </div>
             <div>
                {{$number_order->source}}
             </div>

          </div>
          <div class="col-md-6 details">

            <div style="width:300px">
               Tên Dịch vụ

             </div>
             <div>
                @php


       $naem= DB::table('services')->where('id', $number_order->service_id)->first();

                @endphp
                {{$naem->servicename}}
             </div>

          </div>
          <div class="col-md-6 details">

            <div style="width:300px">
               Trạng thái

             </div>
             <div>
                {{$number_order->status}}
             </div>

          </div>
          <div class="col-md-6 details">

            <div style="width:300px">
                Số thứ tự
             </div>
             <div>
                {{$number_order->number_order}}
             </div>

          </div>
          <div class="col-md-6 details">

            <div style="width:300px">
                số điện thoại

             </div>
             <div>
                {{-- {{$number_order->status}} --}}
                0129024
             </div>

          </div>

          <div class="col-md-6 details">
            <div style="width:300px">
             Thời gian cấp

             </div>
             <div>
                @php
               $datnew = date('H:i - d/m/Y', strtotime($number_order->created_at));
               $datnew_plus_3_hours = date('H:i - d/m/Y', strtotime($number_order->created_at . ' + 3 hours'));
                @endphp
                {{$datnew}}
             </div>
          </div>
          <div class="col-md-6 details">
            <div style="width:300px">
            Địa chỉ email

             </div>
             <div>
                van@gmail.com
             </div>
          </div>
          <div class="col-md-6 details">
            <div style="width:300px">
          Hạn sử dụng

             </div>
             <div>
                {{$datnew_plus_3_hours}}
             </div>
          </div>
          </div>
        </div>
 </div>
</div>
</div>

</div>
<div class="button_add">
<a href="{{route('number_order')}}">
    <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
</a>
Quai lại
</div>
@endsection

@section('scripts')
<script>





</script>
@endsection
