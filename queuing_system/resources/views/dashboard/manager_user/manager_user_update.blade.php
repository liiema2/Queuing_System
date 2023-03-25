@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('manager_user')}}">Quản lý tài khoản</a> </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""><div>Thêm tài khoản</div> </div>
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
                <div> <a href="{{route('user')}}">{{ session('name')}}</a> </div>
            </div></a>


        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">

<div class="informtion_page--Orange">Quản lý tài khoản</div>

<div class="informtion_page_connter">

<div class="informtion_page_connter_first">Thông tin tài khoản1</div>

<div>
    <div class="container">
        {{-- action="{{route('update_check',['id' => $device->id])}}" --}}

        <form action="{{route('manager_updated_1',['id'=>$account->id])}}" class="form_update" method="get" onsubmit="return checkPassword()" >
            {{-- @csrf --}}
        <div class="row">
            <div class="col-md-5">

              <label for="input1">Họ tên <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""> </label>
              <input type="text"  id="input1" name="name" value="{{$account->name}}" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input2">Tên đăng nhập <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text"  id="input1" name="nameuser" value="{{ $account->name }}" class="form-control">

            </div>
            <div class="col-md-5">
              <label for="input3">Số điện thoại <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text" id="input3"  name="phone_number" value="{{$account->phone_number}}" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input4">Mật khẩu <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="password" id="input4"  name="password" value="123456" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input5">Email<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="text" id="input5" name="email"value="{{$account->email}}" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input5">Nhập lại mật khẩu<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <input type="password" id="input6" value="123456" name="password_confirmation" class="form-control">
            </div>
            <div class="col-md-5">
              <label for="input5">Vai trò<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <select id="input2"   name="role" value="{{$account->role}}"class="form-control form-select"style="padding:0px 0px 0px 12px;width:100%" >
                <option value="Kế toán">Kế toán </option>
                <option value="Quản lý">Quản lý</option>
                <option value="Admin">Admin</option>
            </select>
            </div>
            <div class="col-md-5">
              <label for="input5">Tình trạng<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
              <select id="input2" value="{{$account->status}}" name="status" class="form-control form-select" style="padding:0px 0px 0px 12px;width:100%" >
                <option value="0">Ngưng hoạt động</option>
                <option value="1">Hoạt động</option>
            </select>
            </div>


            <div class="button_2_add_cancel">
                <div class="row_2">
                    <div class="col-md-6_cancel">
                      <a href="">Hủy Bỏ</a>
                    </div>
                    <div class=" col-md-6_continew">
                        <button id="submit-form" type="submit" class="btn btn-primary">Cập nhật</button>

                    </div>
                  </div>
                </div>
    </form>



        </div>
        <div class="conter_update_device" style="margin-top:16px">
            <div class="col-md-5-design"> <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""> Là trường Thông tin bắt buộc </div>

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





// $(document).ready(function() {
//   let clickedSelect = null; // khởi tạo biến lưu trữ select được click

//   $('.newcodeinput #selectArrow').click(function() {
//     const select = $(this).siblings('select');
//     select.css('display', 'none');
//   });

//   $('.newcodeinput select').click(function() {
//     const select = $(this);
//     clickedSelect = select; // lưu select được click vào biến

//     $('#selectArrowoption').css('display', 'block');
//     $('#selectArrowoption div').click(function() {
//       const selectedValue = $(this).text();
//       clickedSelect.find('option:selected').text(selectedValue).val(selectedValue);
//       $('#selectArrowoption').css('display', 'none');
//       clickedSelect = null; // trả giá trị biến về null sau khi thay đổi option
//     });
//   });
// });

// $(document).ready(function() {
//   let clickedSelect = null; // khởi tạo biến lưu trữ select được click

//   $('.newcodeinput #selectArrow').click(function() {
//     const select = $(this).siblings('select');
//     select.css('display', 'none');
//     select.removeAttr('name');
//   });

//   $('.newcodeinput select').click(function() {
//     const select = $(this);
//     clickedSelect = select; // lưu select được click vào biến

//     $('#selectArrowoption').css('display', 'block');
//     $('#selectArrowoption div').click(function() {
//       const selectedValue = $(this).text();
//       clickedSelect.find('option:selected').text(selectedValue).val(selectedValue);
//       $('#selectArrowoption').css('display', 'none');
//       clickedSelect = null; // trả giá trị biến về null sau khi thay đổi option
//     });
//   });
// });
var input4 = document.getElementById("input4");
var input6 = document.getElementById("input6");

// Hàm kiểm tra mật khẩu giống nhau
function checkPassword() {
  // Nếu mật khẩu trống hoặc không giống nhau
  if (input4.value == "" || input6.value == "" || input4.value != input6.value) {
    // Hiển thị thông báo lỗi
    alert("Mật khẩu không hợp lệ hoặc không khớp!");
    // Ngăn chặn việc gửi đi
    return false;
  }
  // Nếu mật khẩu giống nhau
  else {
    // Cho phép gửi đi
    return true;
  }
}

  </script>

@endsection
