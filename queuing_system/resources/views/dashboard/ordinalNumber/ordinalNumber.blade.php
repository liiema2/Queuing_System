@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/device/ordinalNumber.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/menu/notify.css') }}">
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

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



<div class="informtion_page" >


<div class="informtion_page_connter">

    <div class="container">
        <div class="row">
@php


$minCreatedAtmax = date('d/m/Y', strtotime($number_order->max('created_at')));
$minCreatedAt = date('d/m/Y', strtotime($number_order->min('created_at')));

 $getdayat = substr($minCreatedAt, 0, 2);
       $getdayatmax= substr($minCreatedAtmax,0,2)
//  dd($getdayat);
@endphp

          <div class="col-auto" style="padding-left:0px ">
            <div>Trạng thái kết nối</div>
            <input  class="form-select_service-date" readonly value="{{$minCreatedAt}}" >
          </div>
          <div class="col-auto" style="padding-left:0px ">
            <div>Trạng thái kết nối</div>
            <input class="form-select_service-date" readonly value="{{$minCreatedAtmax}}">
          </div>

          </div>

        </div>

      </div>


      <table class="blueTable" style="width:1112px">
        <thead>
        <tr>
        <th class="notify"><select name="" id="">
            <option value="">Số thứ tự</option>
            <option value="">Số thứ tự</option>
            <option value="">Số thứ tự</option>
        </select></th>
        <th class="notify"><select name="" id="">
            <option value="">Tên dịch vụ</option>
            <option value="">Số thứ tự</option>
            <option value="">Số thứ tự</option>
        </select></th>
        <th class="notify"><select name="" id="">
            <option value="">Thời gian cấp</option>
            <option value="">Số thứ tự</option>
            <option value="">Số thứ tự</option>
        </select></th>
        <th class="notify"><select name="" id="">
            <option value="">Tình trạng</option>
            <option value="">Số thứ tự</option>
            <option value="">Số thứ tự</option>
        </select></th>
        <th class="notify"><select name="" id="">
            <option value="">Nguồn cấp</option>
            <option value="">Số thứ tự</option>
            <option value="">Số thứ tự</option>
        </select></th>
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
                    {{-- <td>{{ $order->username }}</td> --}}

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
                    {{-- <td>{{ $order->created_at }}</td> --}}

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
                    {{-- <td><a href="">Chi tiết</a></td>
                </tr> --}}
            @endforeach



              </tbody>
        </table>
</div>



<div class="button_add">
<a href="">
    <img class="button_add_img"src="{{ url('/assets/images/icons/document-download.png') }}" alt="">
</a>
Tải về
</div>
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
