@extends('components.navbars.menuDashboard')
@section('links')
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/device/device_details.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">

{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/menu.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/number_order/number_more.css') }}">

{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="">Danh sách cấp số</a>  </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>cấp số mới</div> </div>
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
                <div> <a href="{{route('user')}}">{{ session('username')}}</a> </div>
            </div></a>


        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">

<div class="informtion_page--Orange">Quản lý cấp số</div>

<div class="informtion_page_connter">


        <div class="informtion_page_connter_first" >Cấp số mới</div>
 <div>

    <div class="container">
        <form action="{{'more'}}" method="post">
            @csrf
      <label for="">Dịch vụ khách hàng lựa chọn</label>
            <div>
                <select name="number_order" class="form-select">
                    <option value="Khám tim mạch">Khám tim mạch</option>
                    <option value="Khám sản - Phụ khoa">Khám sản - Phụ khoa</option>
                    <option value="Khám răng hàm mặt">Khám răng hàm mặt</option>
                    <option value="Khám tai mũi họng">Khám tai mũi họng</option>
                  </select>
            </div>

        </form>



        </div>
 </div>
</div>
</div>

</div>
<div class="button_2_add_cancel">
    <div class="row_2">
        <div class="col-md-6_cancel">
          <a href="{{route('number_order')}}">Hủy Bỏ</a>
        </div>
        <div class=" col-md-6_continew">
         <a href="  ">In số</a>
        </div>
      </div>
    </div>
    <div class="backgroud_number_order"></div>
    <div class="number_order_render">
        <div class="number_order_render_conter">


            <div  class="number_order_render_conter-gay" > Số thứ tự được cấp</div>
            <div  class="" > DV:  <span>(tại quầy số 1)</span></div>
        </div>
        <div>
            <div> thời gian cấp </div>
            <div> hạn sử dụng</div>

        </div>
    </div>
@endsection

@section('scripts')
<script>

const continueBtn = document.querySelector('.col-md-6_continew a');
    continueBtn.addEventListener('click', (event) => {
        event.preventDefault(); // prevent the default action of clicking on a link
        const form = document.querySelector('form');
        form.submit();

    });
</script>
@endsection
