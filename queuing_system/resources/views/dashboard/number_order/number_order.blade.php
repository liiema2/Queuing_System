@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}



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

<div class="informtion_page_connter">

    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-auto" style="width: 150px; margin-right:24px">
            <div>Tên dịch vụ</div>
            <select class="form-select" style="width: 150px; ">
              <option  selected>tất cả</option>
              <option  value="1">Khám sản - Phụ Khoa</option>
              <option value="2">Khám răng hàm mặt</option>
              <option value="3">Khám mũi họng</option>
            </select>
          </div>
          <div class="col-auto" style="width: 150px; margin-right:24px">
            <div>Tình trạng</div>
            <select class="form-select" style="width: 150px;  ">
              <option  selected>tất cả</option>
              <option  value="1">Đang chờ </option>
              <option value="2">Đã  sử dụng</option>
              <option value="3">Bỏ qua</option>
            </select>
          </div>
          <div class="col-auto" style="width: 150px; margin-right:24px">
            <div>Nguồn</div>
            <select class="form-select" style="width: 150px;  ">
              <option  selected>tất cả</option>
              <option  value="1">Kios</option>
              <option value="2">Hệ thống</option>

            </select>
          </div>
          <div class="col-3 col-md-auto">
            <div> Chọn thời gian</div>
            <input class="form-select_service-date"  style="width: 150px;" type="date" id="date-input" name="date-of-birth">
          </div>
          <div class="col-auto">
            <div style="visibility: hidden;">Trạng thái kết nối</div>
            <input class="form-select_service-date" type="date" id="date-input" style="width: 150px;" name="date-of-birth">
          </div>
          <div class="col-auto" >
            <div>Từ khóa</div>
          <input type="text" class="form-select1 form-select filter-keyword" style="width:219px" >
          </div>
      </form>

          </div>

        </div>
      </div>

        <div>

            {{-- <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="">All</option>
                    <option value="1" {{ $status ?? '' == 1 ? 'selected' : '' }}>Connected</option>
                    <option value="0" {{ $status ?? '' === '0' ? 'selected' : '' }}>Not connected</option>
                </select>
            </div>
            <div class="form-group">
                <label for="connection">Connection:</label>
                <select name="connection" id="connection" class="form-control">
                    <option value="">All</option>
                    <option value="1" {{ $connection == 1 ? 'selected' : '' }}>Connected</option>
                    <option value="0" {{ $connection === '0' ? 'selected' : '' }}>Not connected</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keyword">Keyword:</label>
                <input type="text" name="keyword" id="keyword" class="form-control" value="{{ $keyword }}">
            </div>

            <button type="submit" class="btn btn-primary">Filter</button> --}}
      </form>

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
            <tfoot>
            <tr>
            <td colspan="8">
            <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
            </td>
            </tr>
            </tfoot>
            <tbody >

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

$(document).ready(function() {
  $('.input-group.date').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    todayHighlight: true
  });
});

</script>
@endsection
