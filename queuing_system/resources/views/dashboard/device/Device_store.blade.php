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
        <form action="{{route('more_update')}}" method="POST" >
            @csrf
        <div class="row">
          <div class="col-md-5">
            <label for="input1">Mã thiết bị : <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input1" name="code" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input2">Loại thiết bị: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <select id="input2" name="name" class="form-control" >
                <option value="kiosk">Kiosk</option>
                <option value="display-counter">Display Counter</option>
            </select>

          </div>
          <div class="col-md-5">
            <label for="input3">Tên thiết bị: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input3" name="nameDevice" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input4">Tên đăng nhập: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input4" name="username" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input5">Địa chỉ IP:<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input5" name="ip_address" class="form-control">
          </div>
          <div class="col-md-5">
            <label for="input5">Mật khẩu:<img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
            <input type="text" id="input5" name="password" class="form-control">
          </div>
        </div>
         <div class="row">
            <div class="col-md-10">
                <label for="input7">Dịch vụ sử dụng: <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt=""></label>
                <textarea id="input7" name="service" class="form-control" style="max-height:44px" rows="1"></textarea>
            </div>

         </div>

         <div class="row">
            <div class="col-md-5"><img src="" alt=""> <img src="{{ url('/assets/images/icons/Vector (2).png') }}" alt="">là trường Thông tin bắt buột </div>

         </div>

         <div class="button_2_add_cancel">
            <div class="row_2">
                <div class="col-md-6_cancel">
                  <a href="">Hủy Bỏ</a>
                </div>
                <div class=" col-md-6_continew">
                 <button type="submit">Tiếp Tục</button>
                </div>
              </div>
            </div>
        </form>
      </div>


</div>

</div>

@endsection


@section('scripts')
<script>

// var serviceInput = document.getElementById("input7");
// var options = ["Khám mắt", "Khám tim"]; // Danh sách options định sẵn

// // Hiển thị danh sách gợi ý options
// serviceInput.addEventListener("input", function() {
//     var services = this.value.trim();
//     var dropdown = document.querySelector(".service-dropdown");

//     // Nếu input rỗng hoặc chỉ chứa khoảng trắng, ẩn dropdown
//     if (services === "" || services.slice(-1) === " ") {
//         if (dropdown) {
//             dropdown.parentNode.removeChild(dropdown);
//         }
//         return;
//     }

//     // Tách các services và hiển thị các options gợi ý
//     var servicesArr = services.split(",");
//     var newOptions = options.filter(function(option) {
//         return !servicesArr.includes(option);
//     });

//     if (newOptions.length > 0) {
//         if (!dropdown) {
//             dropdown = document.createElement("ul");
//             dropdown.setAttribute("class", "service-dropdown");
//             this.parentNode.appendChild(dropdown);
//         } else {
//             dropdown.innerHTML = "";
//         }
//         newOptions.forEach(function(option) {
//             var li = document.createElement("li");
//             li.textContent = option;
//             dropdown.appendChild(li);
//         });
//     } else if (dropdown) {
//         dropdown.parentNode.removeChild(dropdown);
//     }
// });

// // Chọn option và thêm vào danh sách services
// document.addEventListener("click", function(e) {
//     var dropdown = document.querySelector(".service-dropdown");
//     if (dropdown && e.target.nodeName === "LI") {
//         var selectedOption = e.target.textContent.trim();
//         var currentValue = serviceInput.value.trim();

//         if (currentValue === "") {
//             // Nếu giá trị nhập vào trống, ghi đè lại giá trị
//             serviceInput.value = selectedOption;
//         } else if (currentValue.includes(",")) {
//             // Nếu giá trị nhập vào có dấu phẩy, tiếp dán cho giá trị mới nhập
//             var index = currentValue.lastIndexOf(",");
//             var newValue = currentValue.slice(0, index + 1) + " " + selectedOption;
//             serviceInput.value = newValue;
//         } else {
//             // Nếu giá trị nhập vào không có dấu phẩy, thêm dấu phẩy và giá trị mới
//             serviceInput.value = currentValue + ", " + selectedOption;
//         }

//         // Kiểm tra nếu giá trị mới không có trong danh sách options, thêm vào options
//         if (!options.includes(selectedOption)) {
//             options.push(selectedOption);
//         }

//         dropdown.parentNode.removeChild(dropdown);
//     }
// });

// var serviceInput = document.getElementById("input7");
// var options = ["Khám mắt", "Khám tim"]; // Danh sách options định sẵn

// // Hiển thị danh sách gợi ý options
// serviceInput.addEventListener("input", function() {
//     var services = this.value.trim();
//     var dropdown = document.querySelector(".service-dropdown");

//     // Nếu input rỗng hoặc chỉ chứa khoảng trắng, ẩn dropdown
//     if (services === "" || services.slice(-1) === " ") {
//         if (dropdown) {
//             dropdown.parentNode.removeChild(dropdown);
//         }
//         return;
//     }


//     // Nếu input rỗng hoặc chỉ chứa khoảng trắng, ẩn dropdown
// if (services === "" || services.slice(-1) === " ") {
//     if (dropdown) {
//         dropdown.parentNode.removeChild(dropdown);
//     }
//     return;
// }

// // Tách các services và hiển thị các options gợi ý
// var servicesArr = services.split(",");
// var newOptions = options.filter(function(option) {
//     return !servicesArr.includes(option);
// });

// if (newOptions.length > 0) {
//     if (!dropdown) {
//         dropdown = document.createElement("ul");
//         dropdown.setAttribute("class", "service-dropdown");
//         this.parentNode.appendChild(dropdown);
//     } else {
//         dropdown.innerHTML = "";
//     }
//     newOptions.forEach(function(option) {
//         var li = document.createElement("li");
//         li.textContent = option;
//         dropdown.appendChild(li);
//     });
// } else if (dropdown) {
//     dropdown.parentNode.removeChild(dropdown);
// }
// });

// // Chọn option và thêm vào danh sách services
// document.addEventListener("click", function(e) {
// var dropdown = document.querySelector(".service-dropdown");
// if (dropdown && e.target.nodeName === "LI") {
// var selectedOption = e.target.textContent.trim();
// var currentValue = serviceInput.value.trim();


//     if (currentValue === "") {
//         // Nếu giá trị nhập vào trống, ghi đè lại giá trị
//         serviceInput.value = selectedOption;
//     } else if (currentValue.includes(",")) {
//         // Nếu giá trị nhập vào có dấu phẩy, tiếp dán cho giá trị mới nhập
//         var index = currentValue.lastIndexOf(",");
//         var newValue = currentValue.slice(0, index + 1) + " " + selectedOption;
//         serviceInput.value = newValue;
//     } else {
//         // Nếu giá trị nhập vào không có dấu phẩy, thêm dấu phẩy và giá trị mới
//         serviceInput.value = currentValue + ", " + selectedOption;
//     }

//     // Kiểm tra nếu giá trị mới không có trong danh sách options, thêm vào options
//     if (!options.includes(selectedOption)) {
//         options.push(selectedOption);
//     }

//     dropdown.parentNode.removeChild(dropdown);
// }
// });



</script>


@endsection
