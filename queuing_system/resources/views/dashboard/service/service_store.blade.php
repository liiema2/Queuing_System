@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/service/service.css') }}">


<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('service')}}">Danh  sách dịch vụ </a> </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""><div>Thêm dịch vụ</div> </div>
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

    <div class="informtion_page--Orange">Quản lý dịch vụ</div>

<div class="informtion_page_connter">

<div class="informtion_page_connter_first">Thông tin thiết bị</div>

<div>
    <div class="container">
        <form  acction={{route('service_update')}} method="POST" class="form_update">
            @csrf
            <div class="row">
                <div class="col-md-6">
                  <div class="row" style="height: 100%">
                    <div class="col-md-12">
                      <label for="input1" class="input3"> Mã dịch vụ</label>
                      <input type="text" id="input1" name="servicecode" class="form-control">
                    </div>
                    <div class="col-md-12">
                      <label for="input2" class="input3">Tên dịch vụ </label>
                      <input type="text" id="input2"name="servicename" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label for="input3" class="input3">Mô tả</label>
                      <textarea id="input3" class="form-control" name="description" style="height: 112px; width:483px"> </textarea>
                    </div>
                  </div>
                </div>
              </div>


              <div class="informtion_page_connter_first">Thông tin thiết bị</div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                <label class="form-check-label" for="check1">
                  Tăng tự động từ  <div>
                      <div class="check3">001</div> <div class="check_for">đến</div><div class="check3">9999</div>  </div>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  name="check2" id="check2">
                <label class="form-check-label" for="check2">
                  Prefix <div div class="check3">0001</div>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check3" id="check3">
                <label class="form-check-label" for="check3">
                  Surfix  <div class="check3">0001</div>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check4" id="check4">
                <label class="form-check-label" for="check4">
                 Retset theo ngày
                </label>
              </div>


            <div class="button_2_add_cancel">
                <div class="row_2">
                    <div class="col-md-6_cancel">
                      <a >Hủy Bỏ</a>
                    </div>
                    <div class=" col-md-6_continew">
                     <a href="" id="submit-form" type="sumbit" >Thêm dịch vụ</a>
                    </div>
                  </div>
                </div>
    </form>



        </div>
        <div class="row">
            <div class="col-md-5"><img src="" alt=""> <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt="">là trường Thông tin bắt buột </div>

         </div>
      </div>


</div>

</div>
 <div>


 </div>
@endsection

@section('scripts')
<script>
    document.getElementById("submit-form").addEventListener("click", function(e) {
      e.preventDefault(); // prevent default behavior of clicking on an <a> tag

      // get the form element and submit it
      var form = document.querySelector('.form_update');
      form.submit();
    });


    $check1 = isset($_POST['check1']) ? true : false;
        $check2 = isset($_POST['check2']) ? true : false;
        $check3 = isset($_POST['check3']) ? true : false;
        $check4 = isset($_POST['check4']) ? true : false;


  </script>

@endsection
