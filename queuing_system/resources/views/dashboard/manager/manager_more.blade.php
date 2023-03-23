@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/manager/manager.css') }}">


<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Cài đặt hệ thống  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('service')}}">Quản lý tài khoản </a> </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""><div>Thêm vai trò</div> </div>
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
        <div class="container-left">
        <form  acction="{{route('administer_more_updates')}}" method="post" class="form_update">
            @csrf
            <div class="row_group">

                    <div class="col">
                      <label for="input1" class="input3"> Tên vai trò:</label>
                      <input type="text" id="input1" name="role" class="form-control">
                    </div>
                    <div class="col">
                      <label for="input1" class="input3" style="display: block">Mô Tả:</label>
                      <textarea  id="" cols="10" name="description" rows="1"  style="width:490px;height:160px;max-height:160px"></textarea>
                    </div>
                    <div class="col">
                        <div class="col-md-10"> <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt="">là trường Thông tin bắt buột </div>
                    </div>
                  </div>

                  </div>
                  <div class="contatner-right">
                    <div class="contatner-right_top">  Phân quyền chức năng <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""> </div>
                    <div class="contatner-right_body">
                        <div class="contatner-right_body_conter" >Nhóm chức năng A</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Tất cả
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Chức năng x
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Chức năng y
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Chức năng z
                            </label>
                          </div>
                        <div class="contatner-right_body_conter">Nhóm chức năng B</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Tất cả
                            </label>
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Chức năng x
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Chức năng y
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="check1" id="check1">
                            <label class="form-check-label" for="check1">
                                Chức năng z
                            </label>
                          </div>
                    </div>
                    </div>
                  </div>
    </form>

</div>

</div>


        </div>


        <div class="button_2_add_cancel">
            <div class="row_2">
                <div class="col-md-6_cancel">
                  <a href="">Hủy Bỏ</a>
                </div>
                <div class=" col-md-6_continew"  id="submit-form">
                 <a type="submit">Cập nhật</a>
                </div>
              </div>
            </div>


@endsection

@section('scripts')
<script>
 document.getElementById("submit-form").addEventListener("click", function(e) {
      e.preventDefault(); // prevent default behavior of clicking on an <a> tag

      // get the form element and submit it
      var form = document.querySelector('.form_update');
    //   console.log(form);
      form.submit();
    });


  </script>

@endsection
