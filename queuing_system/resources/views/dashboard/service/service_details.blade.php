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

<div class="service_details_left_conter">Thông tin dịch vụ</div>
<div class="service_details_left_conter-small">Mã dịch vụ <div>a</div></div>
<div class="service_details_left_conter-small">Tên dịch vụ <div>a</div> </div>
<div class="service_details_left_conter-small">Mô tả <div>a</div></div>

<div class="service_details_left_conter">Quy tắc cấp số</div>
<div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check1"> --}}
    <label class="form-check-label" for="check1">
      Tăng tự động từ  <div>  <div class="check3">001</div> <div class="check_for">đến</div><div class="check3">9999</div>  </div>
    </label>
  </div>
  <div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check2"> --}}
    <label class="form-check-label" for="check2">
      Prefix <div div class="check3">0001</div>
    </label>
  </div>
  <div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check3"> --}}
    <label class="form-check-label" for="check3">
      Surfix  <div class="check3">0001</div>
    </label>
  </div>
  <div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check4"> --}}
    <label class="form-check-label" for="check4">
     Retset theo ngày
    </label>
  </div>

            </div>
            <div class="service_details_right">

                <div class="service_details_right_from">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label for="select1">Trạng thái:</label>
                                <select class="form-control form-select" id="select1">
                                  <option>Option 1</option>
                                  <option>Option 2</option>
                                  <option>Option 3</option>
                                </select>
                              </div>
                          <div class="col">
                            <label for="input2">Thời gian:</label>
                            <input type="text" class="form-control" id="data1">
                          </div>
                          <div class="col">
                            <label for="input3">Input 3:</label>
                            <input type="text" class="form-control" id="data2">
                          </div>
                          <div class="col">
                            <label for="input4">Từ khóa</label>
                            <input type="text" class="form-control form-select1" id="input4">
                          </div>
                        </div>
                    </div>
                    <div>
                        <table class="blueTable">
                            <thead>
                            <tr>
                            <th> Số thứ tự</th>
                            <th> Trạng thái</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                            <td colspan="2">
                            <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                            </td>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                            <td>cell1_1</td><td>cell2_1</td></tr>
                            <tr>
                            <td>cell1_2</td><td>cell2_2</td></tr>
                            <tr>
                            <td>cell1_3</td><td>cell2_3</td></tr>
                            </tbody>
                            </tr>
                            </table>

                    </div>
                </div>



            </div>
        </div>


</div>

</div>

@section('foter_end')

<div class="button_add">
    <div>
        <a href="">
            <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
        </a>
        Thêm vai trò
        </div>

        <a href="">
            <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
        </a>
        Thêm vai trò
        </div>
    </div>

@endsection
@endsection

@section('scripts')
<script>

  </script>

@endsection
