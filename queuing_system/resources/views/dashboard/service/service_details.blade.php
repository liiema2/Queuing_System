@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/service/service_details.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="{{ asset('../assets/css/device/device_store.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div> <a href="{{route('service')}}">Danh sách dịch vụ</a> </div> <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""><div>Thêm dịch vụ</div> </div>
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

    <div class="informtion_page_connter_first">Thông tin thiết bị</div>


        <div class="service_details">


            <div class="service_details_left">

<div class="service_details_left_conter">Thông tin dịch vụ</div>
<div class="service_details_left_conter-small"> <div>Mã dịch vụ</div>  <div>{{$service->servicecode}}</div></div>
<div class="service_details_left_conter-small"> <div>Tên dịch vụ</div>   <div>{{$service->servicename}}</div> </div>
<div class="service_details_left_conter-small"> <div>Mô tả</div> <div>{{$service->description}}</div></div>

<div class="service_details_left_conter">Quy tắc cấp số</div>
<div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check1"> --}}
    <label class="form-check-label" for="check1">
      Tăng tự động từ  <div>  <div class="check3">0001</div> <div class="check_for">đến</div><div class="check3">9999</div>  </div>
    </label>
  </div>
  <div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check2"> --}}
    <label class="form-check-label" for="check2">
      Prefix <div div class="check3">0001</div>
    </label>
  </div>
  {{-- <div class="form-check">

    <label class="form-check-label" for="check3">
      Surfix  <div class="check3">0001</div>
    </label>
  </div> --}}
  <div class="form-check">
    {{-- <input class="form-check-input" type="checkbox" value="" id="check4"> --}}
    <label class="form-check-label" for="check4">
     Retset theo ngày
    </label>
  </div>

            </div>
            <div class="service_details_right">

                <div class="service_details_right_from">
                        <form action="{{ route('service_details.index') }}" method="get">
                    <div class="container">
                        <div class="row">
                            @php
                            $services = DB::table('services')->get();
                            $minCreatedAtmax = date('d/m/Y', strtotime($services->max('created_at')));
                            $minCreatedAt = date('d/m/Y', strtotime($services->min('created_at')));



                             $getdayat = substr($minCreatedAt, 0, 2);
                                   $getdayatmax= substr($minCreatedAtmax,0,2)
                           //  dd($getdayat);
                           @endphp
                            <div class="col-auto col_date1">
                                <label for="select1">Trạng thái:</label>
                                <select class="form-control form-select filter-status" id="select1">
                                  <option value="">Tất cả</option>
                                  <option value="1">Đã Hoàn thành</option>
                                  <option value="2">Đang thực hiện</option>
                                  <option value="3"> Vắng</option>
                                  <option value="0">Bỏ qua</option>
                                </select>
                              </div>
                          <div class="col col_date col-2">
                            <label for="input2">Thời gian:</label>
                            <input type="text" class="form-control form-select_service-date" value="{{$minCreatedAt}}" readonly id="data1">
                          </div>
                          <div class="col-auto arrow-right">
                            <img src="{{ url('/assets/images/icons/arrow-right.png') }}" alt="">
                          </div>
                          <div class="col col_date col-2">
                            <label for="input3" style="visibility: hidden;">Input 3:</label>
                            <input type="text" class="form-control form-select_service-date" value="{{$minCreatedAtmax}}" readonly id="data2">
                          </div>
                          <div class="col">
                            <label for="input4">Từ khóa</label>
                            <input type="text" class="form-control form-select1" id="input4">
                          </div>
                        </div>
                    </div>
                </form>
                    <div>
                        <table class="blueTable">
                            <thead>
                            <tr>
                            <th> Số thứ tự</th>
                            <th> Trạng thái</th>
                            </tr>
                            </thead>
                            <tfoot class="newbottom">
                            <tr>
                            <td colspan="2">
                            <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                            </td>
                            </tr>
                            </tfoot>
                            <tbody class="newbody">


                                @foreach ($numerical_orders as $numerical_order)
                                <tr>
                                    <td>
                                        @php

                                            $id=$numerical_order->id;
                                            @endphp
                                        {{ $numerical_order->number_order }}
                                    </td>
                                    <td>
                                        @if ($numerical_order->status == 1)
                                            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt=""> Đã hoàn thành
                                        @elseif($numerical_order->status == 2)
                                            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Đang thực hiện
                                        @elseif($numerical_order->status == 3)
                                            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Vắng
                                        @else
                                            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Bỏ lượt
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                            </table>

                    </div>
                </div>



            </div>
        </div>


</div>

</div>

@section('foter_end')

<div class="button_add">
    <div class="button_add_more_service">
        <a href="{{route('service_store')}}">
            <img class="button_add_img"src="{{ url('/assets/images/icons/Edit Square.png') }}" alt="">
        </a>
       Cập nhật danh sách
        </div>

    </div>
    <div class="button_add_1">
    <div class="button_add_more_service_2" >
        <a href="{{route('service')}}">
            <img class="button_add_img"src="{{ url('/assets/images/icons/back-square.png') }}" alt="">
        </a>
        Quay lại
        </div>
    </div>
    {{-- style="display:none" --}}
    <div class="informtion_page_connter_date" style="display:none">
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
@endsection
@endsection

@section('scripts')
<script>
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




$('#select1').change(function() {
    searchDevices();
  });

  // Thực hiện khi nhập từ khóa
  $('.form-select1').on('input', function() {
    searchDevices();
  });

  function updateTableData(status, keyword) {
    $.ajax({

      type: 'get',
      url: '{{ route('service_details.index') }}',

      data: {
        status: status,
        keyword: keyword,

        _token: '{{ csrf_token() }}'
      },
      success: function(data) {

        var orders = data.orders;
        var html = '';
        if (orders && orders.length > 0) {
            orders.forEach(function(device) {
            html += '<tr>';

            html += '<td>' + device.number_order + '</td>';

            html += '<td class="td_comtus">';
            if (device.status == 1) {
              html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt=""> Đã hoàn thành';
            } else if (device.status == 2) {
              html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Đang thực hiện';
            } else if (device.status == 3) {
              html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Vắng';
            } else {
              html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Bỏ lượt';
            }
            html += '</td>';
            html += '</tr>';
          });
        } else {
          html += '<tr><td colspan="4">Không tìm thấy kết quả</td></tr>';
        }
        $('tbody.newbody').html(html);
      },
      error: function() {
        alert('Đã xảy ra lỗi!');
      }
    });
  }

  function searchDevices() {
    var status = $('.filter-status').val();
    var keyword = $('.form-select1').val();
    console.log(status);
    updateTableData(status, keyword);
  }
  </script>

@endsection
