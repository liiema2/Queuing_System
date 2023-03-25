@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/notify.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
{{-- <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> --}}
@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Báo cáo <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Lập báo cáo</div> </div>
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
                <div> <a href="{{route('user')}}">{{ session('name')}}</a> </div>
            </div></a>


        </div>



    </div>

</div>




</div>

<div>



</div>
<div class="informtion_page">

    @php
        // $user_log->created_at;
        $max_time = $user_log->max('created_at');

// Format the maximum time as a date string
$time = date('d/m/Y', strtotime($max_time));
        $mmin_time = $user_log->max('created_at');

// Format the maximum time as a date string
$time_min = date('d/m/Y', strtotime($mmin_time));
    @endphp
    <div class="informtion_page--Orange">Quản lý dịch vụ</div>

    <div class="informtion_page_connter" style="margin:0 ">

        <form action="{{ route('user_log.index') }}" method="get">
        <div class="container">
            <div class="row justify-content-between">
                <div style="display: flex">
                    <div class="col-auto">
                        <div>Trạng thái kết nối</div>
                        <input  class="form-select_service-date" value="{{$time_min}}" readonly>
                      </div>
                      <div class="col-auto">
                        <div>Trạng thái kết nối</div>
                        <input  class="form-select_service-date"value="{{$time}}" readonly>
                      </div>
                </div>


                  <div class="col-auto">
                    <div>Từ khóa</div>
                    <input  id="date-input" class="form-select1 form-select filter-keyword">
                  </div>

                  </div>

                </div>
          </div>



            <table class="blueTable">
                <thead>
                    <tr>
                        <th>Tên đăng nhập</th>
                        <th>Thời gian thao tác </th>

                        <th>ip thực hiện</th>
                        <th>Thao tác thực hiện</th>
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

                            @foreach($user_log as $item)
                            <tr>

                                <td>{{$item->username}}</td>

                                @php
                                 $minCreatedAtmax = date('d/m/Y h:i:s', strtotime($item->created_at));
                                @endphp
                                <td>{{  $minCreatedAtmax }}</td>

                                <td>{{$item->ip_address}}</td>
                                <td>{{$item->action}}</td>
                            </tr>
                            @endforeach


                          </tbody>
                </table>
          </div>

    </div>

    </div>
{{-- <div class="informtion_page">



<div class="informtion_page_connter">

    <div class="container">
        <div class="row">

          <div class="col-auto">
            <div>Trạng thái kết nối</div>
            <input  class="form-select_service-date" readonly>
          </div>
          <div class="col-auto">
            <div>Trạng thái kết nối</div>
            <input  class="form-select_service-date" readonly>
          </div>
          <div class="col-auto">
            <div>Từ khóa</div>
            <input  id="date-input" class="form-select1 form-select filter-keyword">
          </div>

          </div>

        </div>
      </div>


</div>


</div>
<table class="blueTable">
    <thead>
    <tr>
        <th>Tên đăng nhập</th>
        <th>Thời gian thao tác </th>

        <th>ip thực hiện</th>
        <th>Thao tác thực hiện</th>
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

            @foreach($user_log as $item)
            <tr>

                <td>{{$item->username}}</td>

                @php
                 $minCreatedAtmax = date('d/m/Y h:i:s', strtotime($item->created_at));
                @endphp
                <td>{{  $minCreatedAtmax }}</td>

                <td>{{$item->ip_address}}</td>
                <td>{{$item->action}}</td>
            </tr>
            @endforeach


          </tbody>
    </table>
</div> --}}



@endsection
@section('foter_end')
<div class="informtion_page_connter_date" style="display:none;top: 188px;
left: 224px;">
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
@section('scripts')
<script>




$('.filter-keyword').on('input', function() {
    searchDevices();
  });



  function updateTableData( keyword) {
  $.ajax({
    type: 'GET',
    url: '{{ route('user_log.index') }}',
    data: {

      keyword: keyword,
    },
    success: function(data) {
      var logs = data.logs;
      var html = '';
      if (logs && logs.length > 0) {
        logs.forEach(function(log) {
          html += '<tr>';
          html += '<td>' + log.username + '</td>';
          var mydate = moment(log.created_at);
var formatted_date = mydate.format("DD/MM/YYYY HH:mm:ss");
//           html += '<td>' + (new Date(log.created_at)).toLocaleString('vi-VN', {
//   day: '2-digit',
//   month: '2-digit',
//   year: 'numeric',
//   hour: '2-digit',
//   minute: '2-digit',
//   second: '2-digit'
// }) + '</td>';
            html += '<td>' + formatted_date + '</td>';
          html += '<td>' + log.ip_address + '</td>';
          html += '<td>' + log.action + '</td>';
          html += '</tr>';
        });
      } else {
        html += '<tr><td colspan="3">Không tìm thấy kết quả</td></tr>';
      }
      $('tbody.body_connter_service').html(html);
    },

    error: function() {
      alert('Đã xảy ra lỗi!');
    }
  });
}
function searchDevices() {

//   var connection = $('.filter-connection select').val();
  var keyword = $('.filter-keyword').val();
  updateTableData( keyword);
}

</script>
@endsection
