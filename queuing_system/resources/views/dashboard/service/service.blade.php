@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/device/service.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Dịch vụ  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Danh sách dịch vụ</div> </div>
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

<div class="informtion_page--Orange">Quản lý dịch vụ</div>

<div class="informtion_page_connter">

    <form action="{{ route('service.index') }}" method="post">
    <div class="container">
        <div class="row">
          <div class="col-auto col_degin">
            <div>Trạng thái hoạt động</div>
            <select class="form-select">
              <option  selected value="">tất cả</option>
              <option  value="active">Hoạt động </option>
              <option value="inactive">Không hoạt đông</option>

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
            <input class="form-select_service-date"  style="width: 150px;" value="{{$minCreatedAt}}"   >
          </div>
          <div class="col-auto arrow-right">
            <img src="{{ url('/assets/images/icons/arrow-right.png') }}" alt="">
          </div>
          <div class="col-auto">
            <div style="visibility: hidden;">Trạng thái kết nối</div>
            <input class="form-select_service-date"  id="date-input" value="{{ $minCreatedAtmax}}" style="width: 150px;" name="date-of-birth">
          </div>
          <div class="col-auto" style="margin-left: 105px;">
            <div>Từ khóa</div>
         <input type="text" class="form-select1 form-select filter-keyword">
          </div>
          </div>

        </div>
      </div>



        <table class="blueTable">
            <thead>
            <tr>
            <th>Mã dịch vụ</th>
            <th>Tên dịch vụ</th>
            <th>Mô tả</th>
            <th>Trạng thái kết nối</th>

            <th></th>
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

                @foreach ($services as $services)
                <tr>
                <td>
                 {{ $services->servicecode }} </td>
               <td>  {{ $services->servicename }} </td>
               <td>  {{ $services->description }} </td>
               <td class="td_comtus">  @if ($services->status == 'active')
               <img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt="">  Kết nối
           @else
           <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối
           @endif </td>






             {{-- {{ route('details', ['id' => $device->id]) }} --}}

               <td>  <a href="{{route('service_details',['id' => $services->id])}}">Chi tiết</a>
               </td>
               <td>  <a href="{{route('service_update',['id'=>$services->id])}}">Cập nhật</a> </td>


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
    <a href="{{ route('service_store') }}">
        <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
    </a  >
    Thêm dịch vụ
    </div>

<div class="informtion_page_connter_date" style="display:none">
    <div class="card">
        <div class="card-header">
          <div class="row" >
            <div class="col-1 text-start">
              {{-- <a href="#" class="btn btn-primary">&lt;</a> --}}
                  <img style="margin-top:5px ;margin-left:4px" src="{{ url('/assets/images/dashbroad/Vector (4).png') }}" alt="">
            </div>
            <div class="col-5 text-center"style="margin-left:35px;margin-right:50px">
              <div  class="text-center_date_conter" > Now 2021</div>
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





$('.form-select').change(function() {
    searchDevices();
  });

  // Thực hiện khi nhập từ khóa
  $('.filter-keyword').on('input', function() {
    searchDevices();
  });

function updateTableData(status, keyword) {

$.ajax({
  type: 'post',
  url:'{{ route('service.index') }}',
  data: {
    status: status,
    keyword: keyword,
    '_token': $('meta[name="csrf-token"]').attr('content')
  },
  success: function(response) {
    var services = response.service;
    var html = '';
    if (services && services.length > 0) {
      services.forEach(function(service) {
        html += '<tr>';
        html += '<td>' + service.servicecode + '</td>';
        html += '<td>' + service.servicename + '</td>';
        html += '<td>' + service.description + '</td>';
        html += '<td class="td_comtus">';
        if (service.status == 'active') {
          html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt=""> Kết nối';
        } else {
          html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối';
        }
        html += '</td>';
        html += '<td><a href="/services/' + service.id + '">Chi tiết</a></td>';
        html += '<td><a href="#">Cập nhật</a></td>';
        html += '</tr>';
      });
    } else {
      html += '<tr><td colspan="6">Không tìm thấy kết quả</td></tr>';
    }
    $('.body_connter_service').html(html);
  },
//   error: function() {
//     alert('Đã xảy ra lỗi!');
//   }
});
}

function searchDevices() {
  var status = $('.form-select').val();
//   var connection = $('.filter-connection select').val();
  var keyword = $('.filter-keyword').val();
  updateTableData(status, keyword);
}






// $('.form-select_service-date').click(function() {
//   $('.informtion_page_connter_date').toggle();
//   $(document).ready(function() {
//     $('td').filter(function() {
//       return $(this).text() == '{{ $getdayat }}' || $(this).text() == '{{  $getdayatmax }}';
//     }).addClass('highlighted');
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



</script>
@endsection
