@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/dashbroad.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Dashboard    </div>
        <div  class="nvarContent_left">
            <div class="informtion_page--Orange">Biểu đồ cấp số</div>
            <div class="informtion_page_4_img">
                <a href="{{route('number_order')}}" style="text-decoration: none;">
                        <div class="informtion_page_4">
                            <div> <div class="informtion_page_4-img"><div> <img src="{{ url('/assets/images/dashbroad/Frame 624758 (1).png') }}" alt=""> </div> <div>số thứ tự đã cấp</div></div>
                            <div> <div class="informtion_page_4-img1"><div >4.221</div> <div><img src="{{ url('/assets/images/dashbroad/Group (2).png') }}" alt=""> 32% </div></div></div>

                            </div>

                    </a>


            </div>
            <a href="{{route('number_order')}}" style="text-decoration: none;">

                <div class="informtion_page_4">
                    <div> <div class="informtion_page_4-img"><div> <img src="{{ url('/assets/images/dashbroad/Frame 624759 (2).png') }}" alt=""> </div> <div>số thứ tự đã cấp</div></div>
                    <div> <div class="informtion_page_4-img1"><div >4.221</div> <div><img src="{{ url('/assets/images/dashbroad/Group (2).png') }}" alt=""> 32% </div></div></div>

                    </div>
            </a>


            </div>
            <a href="{{route('number_order')}}" style="text-decoration: none;">
                <div class="informtion_page_4">
                    <div> <div class="informtion_page_4-img"><div> <img src="{{ url('/assets/images/dashbroad/Frame 624759 (3).png') }}" alt=""> </div> <div>số thứ tự đã cấp</div></div>
                    <div> <div class="informtion_page_4-img1"><div >4.221</div> <div><img src="{{ url('/assets/images/dashbroad/Group (2).png') }}" alt=""> 32% </div></div></div>

                    </div>
                </a>
            </div>
            <a href="{{route('number_order')}}" style="text-decoration: none;">
                <div class="informtion_page_4">
                    <div> <div class="informtion_page_4-img"><div> <img src="{{ url('/assets/images/dashbroad/Frame 624759 (4).png') }}" alt=""> </div> <div>số thứ tự đã cấp</div></div>
                    <div> <div class="informtion_page_4-img1"><div >4.221</div> <div><img src="{{ url('/assets/images/dashbroad/Group (2).png') }}" alt=""> 32% </div></div></div>

                    </div>
                </a>
            </div>





            </div>
            <div class="chart" style="margin-top:12px">
                <img id="chartImg" src="http://127.0.0.1:8000/assets/images/dashbroad/ngay.png" alt="">
                <div class="chart_input">
                    <label for="">Xem theo</label>
                    <select name="" id="form-select_change" class="form-select">
                        <option value="ngay">Ngày</option>
                        <option value="tuan">Tuần</option>
                        <option value="thang">Tháng</option>
                    </select>
                </div>
            </div>



        </div>
    <div class="nvarContent_right">
        <div class="nvarContent_right-white">
            <div class="bell_backgroud">
                <img src="{{ url('/assets/images/icons/notification.png') }}" alt="">

            </div>

                <a class="user_infor" href="{{route('user')}}
                "> <img class="imgas_user" src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2Q.png') }}"
                alt="">

            <div class="nvarContent_right-xc">
                <div>xin chào</div>
                <div> <a href="{{route('user')}}">{{ session('username')}}</a> </div>
            </div>


        </div>

        <div class="nvarContent_right-xc-tq">Tổng quan</div>
        <div class="list_service">
            {{-- <div  class="list_service_device"><img src="{{ url('/assets/images/dashbroad/Frame 625210 (1).png') }}" alt="">  <div class="list_service_device_infor"><div>44002</div> <div><img class="list_service_device_infor-small" src="{{ url('/assets/images/dashbroad/monitor.png') }}" alt=""> thiết bị</div></div>  <div class="list_service_device_more_infor"><div> <img src="{{ url('/assets/images/dashbroad/Frame 625214.png') }}" alt=""> Đang hoạt động <div class="list_service_device_more_infor_design"  style="margin-left: 10px">3.799</div></div> <div> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215.png') }}" alt=""> Ngưng hoạt động <div class="list_service_device_more_infor_design"> 300</div></div></div>  </div> --}}
            <a href="{{route('device')}}" style="text-decoration: none">
                <div  class="list_service_device"><img src="{{ url('/assets/images/dashbroad/Frame 625210 (1).png') }}" alt="">  <div class="list_service_device_infor"><div>44002</div> <div><img class="list_service_device_infor-small" src="{{ url('/assets/images/dashbroad/monitor.png') }}" alt=""> Thiết bị</div></div>  <div class="list_service_device_more_infor"><div> <img src="{{ url('/assets/images/dashbroad/Frame 625214.png') }}" alt=""> Đang hoạt động <div class="list_service_device_more_infor_design"  style="margin-left: 10px">3.799</div></div> <div> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215.png') }}" alt=""> Ngưng hoạt động <div class="list_service_device_more_infor_design"> 300</div></div></div>  </div>

            </a>
            {{-- <div  class="list_service_device"><img src="{{ url('/assets/images/dashbroad/Frame 625210 (1).png') }}" alt="">  <div class="list_service_device_infor"><div>44002</div> <div><img class="list_service_device_infor-small" src="{{ url('/assets/images/dashbroad/monitor.png') }}" alt=""> thiết bị</div></div>  <div class="list_service_device_more_infor"><div> <img src="{{ url('/assets/images/dashbroad/Frame 625214.png') }}" alt=""> Đang hoạt động <div class="list_service_device_more_infor_design"  style="margin-left: 10px">3.799</div></div> <div> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215.png') }}" alt=""> Ngưng hoạt động <div class="list_service_device_more_infor_design"> 300</div></div></div>  </div> --}}

           <a href="{{route('service')}}">
            <div  class="list_service_device"><img src="{{ url('/assets/images/dashbroad/Frame 625210 (2).png') }}" alt="">  <div class="list_service_device_infor"><div>44002</div> <div style="color: #4277FF;"><img class="list_service_device_infor-small" src="{{ url('/assets/images/dashbroad/Frame 332.png') }}" alt=""> Dịch vụ</div></div>  <div class="list_service_device_more_infor"><div> <img src="{{ url('/assets/images/dashbroad/Frame 625214 (1).png') }}" alt=""> Đang hoạt động <div class="list_service_device_more_infor_design"  style="margin-left: 10px">3.799</div></div> <div> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215.png') }}" alt=""> Ngưng hoạt động <div class="list_service_device_more_infor_design"> 300</div></div></div>

           </a>
            {{-- <div  class="list_service_device"><img src="{{ url('/assets/images/dashbroad/Frame 625210 (2).png') }}" alt="">  <div class="list_service_device_infor"><div>44002</div> <div style="color: #4277FF;"><img class="list_service_device_infor-small" src="{{ url('/assets/images/dashbroad/Frame 332.png') }}" alt=""> thiết bị</div></div>  <div class="list_service_device_more_infor"><div> <img src="{{ url('/assets/images/dashbroad/Frame 625214 (1).png') }}" alt=""> Đang hoạt động <div class="list_service_device_more_infor_design"  style="margin-left: 10px">3.799</div></div> <div> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215.png') }}" alt=""> Ngưng hoạt động <div class="list_service_device_more_infor_design"> 300</div></div></div> --}}

        </div>
        <a href="{{route('number_order')}}">
            <div  class="list_service_device"><img src="{{ url('/assets/images/dashbroad/Frame 625210 (3).png') }}" alt="">
                <div class="list_service_device_infor"><div>44002</div>

                <div style="color: #35C75A;"><img class="list_service_device_infor-small" src="{{ url('/assets/images/dashbroad/fi_layers.png') }}" alt=""> Cấp số</div>
               </div>
                <div class="list_service_device_more_infor"><div >

                   <img src="{{ url('/assets/images/dashbroad/Frame 625214 (2).png') }}" alt=""> Đã sử dụng <div class="list_service_device_more_infor_design" style="margin-left: 35px">3.799</div></div> <div class="list_service_device_more_infor-last"> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215.png') }}" alt=""> Đang chờ <div class="list_service_device_more_infor_design" style="margin-left: 45px"> 300</div>
             </div >   <div> <img class="list_service_device_more_infor_img" src="{{ url('/assets/images/dashbroad/Frame 625215 (1).png') }}" alt=""> Bỏ qua <div class="list_service_device_more_infor_design"  style="margin-left: 60px"> 300</div>



               </div>
        </a>



                </div>

                </div>



        </div>
        <div class="list_service-date" >

            <div class="container_1" style="width:353px">
                <div class="row">
                  <div class="col">
                    <div class="card">
                      <div class="card-header">
                        <div class="row" >
                          <div class="col-1 text-start">
                            {{-- <a href="#" class="btn btn-primary">&lt;</a> --}}
                                <img style="margin-top:5px ;margin-left:4px" src="{{ url('/assets/images/dashbroad/Vector (4).png') }}" alt="">
                          </div>
                          <div class="col-5 text-center"style="margin-left:35px;margin-right:50px">
                            <div  class="text-center_date_conter" >T19 Now 2021</div>
                          </div>
                          <div class="col-1 text-end">
                            {{-- <a href="#" class="btn btn-primary">&gt;</a> --}}
                            <img  style="margin-top:5px" src="{{ url('/assets/images/dashbroad/u_angle-right-b.png') }}" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <table class="table table-bordered table-responsive">
                          <thead>
                            <tr>

                              <th>Mo</th>
                              <th>Tu</th>
                              <th>We</th>
                              <th>Th</th>
                              <th>Fr</th>
                              <th>Sa</th>
                              <th>Su</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                                <td id="t2">27</td>
                                <td id="t3">28</td>
                                <td id="t4">29</td>
                                <td id="t5">30</td>
                                <td id="t6">1</td>
                                <td id="t7">2</td>
                                <td id="cn">3</td>
                              </tr>
                              <tr>
                                <td id="10">4</td>
                                <td id="11">6</td>
                                <td id="12">6</td>
                                <td id="13">7</td>
                                <td id="14">8</td>
                                <td id="15">9</td>
                                <td id="16">10</td>
                              </tr>
                              <tr>
                                <td id="17">11</td>
                                <td id="18">12</td>
                                <td id="19">13</td>
                                <td id="20">14</td>
                                <td id="21">15</td>
                                <td id="22">16</td>
                                <td id="23">17</td>
                              </tr>
                              <tr>
                                <td id="24">18</td>
                                <td id="25">19</td>
                                <td id="26">20</td>
                                <td id="27">21</td>
                                <td id="28">22</td>
                                <td id="29">23</td>
                                <td id="30">24</td>
                              </tr>
                              <tr>
                                <td id="31">25</td>
                                <td> 26</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


        </div>

    </div>

</div>




</div>

<div>



</div>



@endsection

@section('scripts')
<script>





document.addEventListener('DOMContentLoaded', function() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; // Tháng bắt đầu từ 0
  var yyyy = today.getFullYear();

  // Đặt backcolor màu cam cho ngày hiện tại
  var currentDate = document.getElementsByTagName('td');
  for (var i = 0; i < currentDate.length; i++) {
    if (currentDate[i].textContent == dd && currentDate[i].parentNode.rowIndex != 0) {
      currentDate[i].style.backgroundColor = '#FF7506';
      currentDate[i].style.borderRadius = '8px';
    }
  }

  // Hiển thị ngày hiện tại trong tiêu đề của lịch
  var monthYear = document.querySelector('.card-body h4');
  if (monthYear) {
    monthYear.innerHTML = 'Tháng ' + mm + ', ' + yyyy;
  }
});


const formSelect = document.getElementById('form-select_change');
document.addEventListener("DOMContentLoaded", function() {
  const formSelect = document.getElementById('form-select_change');

const chartImg = document.getElementById('chartImg');
formSelect.addEventListener('change', function() {
  if (formSelect.value === 'ngay') {
    chartImg.src = 'http://127.0.0.1:8000/assets/images/dashbroad/ngay.png';
  } else if (formSelect.value === 'tuan') {
    chartImg.src = 'http://127.0.0.1:8000/assets/images/dashbroad/tuan.png';
  } else if (formSelect.value === 'thang') {
    chartImg.src = 'http://127.0.0.1:8000/assets/images/dashbroad/thang.png';
  }
});

});





// const today = new Date();
// const day = today.getDate();

// // Lấy danh sách các ô td trong bảng
// const tdList = document.getElementsByTagName("td");

// // Lặp qua từng ô td và kiểm tra giá trị của nó
// for (let i = 0; i < tdList.length; i++) {
//   const td = tdList[i];

//   // Nếu giá trị của ô td bằng với ngày hiện tại thì đặt màu nền cho nó
//   if (parseInt(td.innerHTML) === day) {
//     td.style.backgroundColor = "yellow";
//   }
// }




</script>
