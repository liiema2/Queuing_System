@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Cấp số  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Danh sách cấp số</div> </div>
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

<div class="informtion_page_connter" style="margin-left: 0px">

    <div class="container">
      <form action="{{route('number_order.index')}}" method="get">
        {{-- @crsf --}}

        <div class="row">
          <div class="col-auto" style="width: 150px; margin-right:24px">
            <div>Tên dịch vụ</div>
            <select class="form-select service_id" style="width: 150px; ">
              <option  value="" selected>tất cả</option>
              <option  value="Khám sản - phụ khoa">Khám sản - Phụ Khoa</option>
              <option value="Khám răng hàm mặ">Khám răng hàm mặt</option>
              <option value="Khám mũi họn">Khám mũi họng</option>
            </select>
          </div>
          <div class="col-auto" style="width: 150px; margin-right:24px">
            <div>Tình trạng</div>
            <select class="form-select status" style="width: 150px;  ">
              <option  value="" selected>tất cả</option>
              <option  value="2">Đang chờ </option>
              <option value="1">Đã  sử dụng</option>
              <option value="3">Vắng</option>
              <option value="0">Bỏ qua</option>
            </select>
          </div>
          <div class="col-auto" style="width: 150px; margin-right:24px">
            <div>Nguồn</div>
            <select class="form-select source1" style="width: 150px;  ">
              <option value="" selected>tất cả</option>
              <option  value="Kios">Kios</option>
              <option value="Hệ thống">Hệ thống</option>

            </select>
          </div>
          <div class="col-auto">
            <div> Chọn thời gian</div>
            @php

 $minCreatedAtmax = date('d/m/Y', strtotime($services->max('created_at')));
 $minCreatedAt = date('d/m/Y', strtotime($services->min('created_at')));

  $getdayat = substr($minCreatedAt, 0, 2);
        $getdayatmax= substr($minCreatedAtmax,0,2)
//  dd($getdayat);
@endphp
            <input class="form-select_service-date "  style="width: 150px;" value="{{$minCreatedAt}}">
          </div>
          <div class="col-auto arrow-right">
            <img src="{{ url('/assets/images/icons/arrow-right.png') }}" alt="">
          </div>
          <div class="col-auto">
            <div style="visibility: hidden;">Trạng thái kết nối</div>
            <input class="form-select_service-date"  id="date-input" value="{{ $minCreatedAtmax}}" style="width: 150px;" name="date-of-birth">
          </div>
          <div class="" >
            <div>Từ khóa</div>
          <input type="text" class="form-select1 form-select filter-keyword" style="width:219px" >
          </div>
      </form>

          </div>

        </div>
      </div>

        <div>



        <table class="blueTable">
            <thead>
            <tr>
            <th>STT</th>
            <th>Tên khách hàng</th>
            <th>Tên dich vụ</th>
            <th>Thời gian cấp</th>
            <th>Hạn sử dụng</th>

            <th>Trạng thái </th>
            <th>Nguồn</th>
            <th></th>
            </tr>
            </thead>
            <tfoot class="tfoot">
                <tr>
                <td colspan="8">
                <div class="links"><a href="#"><img src="{{url('/assets/images/icons/fi_chevron_down (3).png')}}" alt=""></a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#"><img src="{{url('/assets/images/icons/fi_chevron_down (4).png')}}" alt=""></a></div>
                </td>
                </tr>
                </tfoot>
            <tbody class="body_connter_service">

              @foreach ($number_order as $order)
              <tr>
                  {{-- <td>{{ $order->id }}</td> --}}
                  <td>{{ $order->number_order }}</td>
                  <td>{{ $order->username }}</td>

                  @php
                  $service = DB::table('services')
                             ->join('orders', 'services.id', '=', 'orders.service_id')
                             ->select('servicename as service_name', 'orders.*')
                             ->where('orders.id', '=', $order->id)
                             ->get();
                  @endphp

                  @foreach ($service as $item)
                      <td>{{ $item->service_name }}</td>
                  @endforeach

                  <td>{{ $order->created_at }}</td>
                  <td>{{ $order->created_at }}</td>

                  {{-- <td>{{ $order->status }}</td> --}}

                  <td class="td_comtus">  @if ($order->status == '1')
                    <img src="{{ url('/assets/images/icons/status/Ellipse 1 (6).png') }}" alt="">  Đã sử dụng
                   @elseif($order->status=='2')
                   <img src="{{ url('/assets/images/icons/status/Ellipse 1 (5).png') }}" alt="">  Đang chờ
                @else
                <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Bỏ qua
                @endif </td>
                  <td>{{ $order->source }}</td>
                  {{-- <td>{{ $order->updated_at }}</td> --}}
                  <td><a href="">Chi tiết</a></td>
              </tr>
          @endforeach



            </tbody>
            </table>
      </div>

</div>

</div>
@section('foter_end')

<div class="button_add">
    {{-- {{ route('update_devices', ['id' => $device->id]) }} --}}
    <a href="{{ route('number_order_more') }}">
        <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
    </a  >
    Cấp số mới
    </div>
    <div class="informtion_page_connter_date" style="display:none; left: 747px;">
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
              <table class="table table-bordered table-responsive" id="menudate-boder-none">
                <thead class="menudate-boder-none--tr">
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
                <tbody class="menudate-boder-body-none--tr">
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
@endsection
@endsection

@section('scripts')
<script>

function toggleService(event) {
    event.preventDefault();
    var moreLink = event.target;
    var td = moreLink.parentNode;
    var infoLink = td.querySelector('.information_service');
    var service = td.querySelector('.service_link').innerHTML;
    if (infoLink.style.display === "none" || infoLink.style.display === "") {
        infoLink.style.display = "inline";
        infoLink.innerHTML = service;
        moreLink.innerHTML = "thu gọn";
    } else {
        infoLink.style.display = "none";
        moreLink.innerHTML = "xem thêm";
    }
}

// $(document).ready(function() {
//   $('.input-group.date').datepicker({
//     format: 'dd/mm/yyyy',
//     autoclose: true,
//     todayHighlight: true
//   });
// });
$('.form-select_service-date').click(function() {
  $('.informtion_page_connter_date').toggle();
  $(document).ready(function() {
    $('td').filter(function() {
      // Get the text content of the current cell
      var cellText = $(this).text();

      // Convert the values of $getdayat and $getdayatmax to integers
      var start = parseInt('{{ $getdayat }}');
      var end = parseInt('{{ $getdayatmax }}');

      // Check if the cell value is within the range of start and end
      if (!isNaN(cellText) && parseInt(cellText) >= start && parseInt(cellText) <= end) {
        // If the cell value is within the range, apply the range color
        $(this).addClass('range-highlighted');
      }
       if (parseInt(cellText) === start) {
        // If the cell value is the start point, apply the start color
        $(this).addClass('start-highlighted');
      }
       if (parseInt(cellText) === end) {
        // If the cell value is the end point, apply the end color
        $(this).addClass('end-highlighted');
      }
    });
  });
});



// $('.service_id').change(function() {
//     searchDevices();
//   });
// $('.source').change(function() {
//     searchDevices();
//   });
// $('.status').change(function() {
//     searchDevices();
//   });

//   // Thực hiện khi nhập từ khóa
//   $('.filter-keyword').on('input', function() {
//     searchDevices();
//   });

// function updateTableData(status, keyword,service_id,source) {

// $.ajax({
//   type: 'post',
//   url:'{{ route('number_order.index') }}',
//   data: {
//     status: status,
//     keyword: keyword,
//     service_id: service_id,
//     source,
//     '_token': $('meta[name="csrf-token"]').attr('content')
//   },
//   success: function(response) {
//     var services = response.service;
//     var html = '';
//     if (services && services.length > 0) {
//       services.forEach(function(service) {
//         html += '<tr>';
//         html += '<td>' + service.servicecode + '</td>';
//         html += '<td>' + service.servicename + '</td>';
//         html += '<td>' + service.description + '</td>';
//         html += '<td class="td_comtus">';
//         if (service.status == 'active') {
//           html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt=""> Kết nối';
//         } else {
//           html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối';
//         }
//         html += '</td>';
//         html += '<td><a href="/services/' + service.id + '">Chi tiết</a></td>';
//         html += '<td><a href="#">Cập nhật</a></td>';
//         html += '</tr>';
//       });
//     } else {
//       html += '<tr><td colspan="6">Không tìm thấy kết quả</td></tr>';
//     }
//     $('.body_connter_service').html(html);
//   },
//   error: function() {
//     alert('Đã xảy ra lỗi!');
//   }
// });
// }

// function searchDevices() {
//   var service_id = $('.service_id').val();
//   var status = $('.status').val();
//   var source = $('.source').val();

//   var keyword = $('.filter-keyword').val();
//   updateTableData(status, keyword);
// }


// Bind change events to the filter elements
$('.status').change(function() {
  searchOrders();
});
$('.service_id').change(function() {
    searchDevices();
  });
$('.source1').change(function() {
    searchOrders();
  });
$('.filter-keyword').on('input', function() {
    searchOrders();
  });

function updateTableData(status, keyword, service_id, source) {

  $.ajax({
    type: 'get',
    url: '{{ route('number_order.index') }}',
    data: {
      status: status,
      keyword: keyword,
      service_id: service_id,
      source: source,
    //   '_token': $('meta[name="csrf-token"]').attr('content')

    },
    success: function(data) {

      var orders = data.orders;
        console.log(orders);
      var html = '';
      if (orders && orders.length > 0) {

        orders.forEach(function(order) {
          html += '<tr>';
          html += '<td>' + order.number_order + '</td>';
          html += '<td>' + order.username + '</td>';
          html += '<td>' + order.service_name + '</td>';
          html += '<td>' + order.created_at + '</td>';
          html += '<td>' + order.updated_at + '</td>';
          html += '<td class="td_comtus">';
          if (order.status == '1') {
            html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (6).png') }}" alt=""> Đã sử dụng';
          } else if (order.status == '2') {
            html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (5).png') }}" alt=""> Đang chờ';
          } else {
            html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Bỏ qua';
          }
          html += '</td>';
          html += '<td>' + order.source + '</td>';
          html += '<td><a href="/orders/' + order.id + '">Chi tiết</a></td>';
          html += '</tr>';
        });
      } else {
        html += '<tr><td colspan="8">Không tìm thấy kết quả</td></tr>';
      }
      $('tbody').html(html);
    },
    error: function() {
      alert('Đã xảy ra lỗi!');
    }
  });
}

// Define the search function
function searchOrders() {
  var service_id = $('.service_id').val();
  var status = $('.status').val();
  var source = $('.source1').val();
  var keyword = $('.filter-keyword').val();

  console.log( status,service_id,source, keyword);
  updateTableData(status, keyword, service_id, source);
}

// Call the search function on page load
// searchOrders();
</script>
@endsection
