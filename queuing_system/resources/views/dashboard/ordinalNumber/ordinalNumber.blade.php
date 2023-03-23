@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('../assets/css/menu/notify.css') }}">
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div> <a href="">Lê Quỳnh Ái Vân</a> </div>
            </div></a>


        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">

{{-- <div>Danh sách thiết bị</div> --}}

<div class="informtion_page_connter">

    <div class="container">
        <div class="row">

          <div class="col-auto">
            <div>Trạng thái kết nối</div>
            <input type="date" id="date-input" name="date-of-birth">
          </div>
          <div class="col-auto">
            <div>Trạng thái kết nối</div>
            <input type="date" id="date-input" name="date-of-birth">
          </div>

          </div>

        </div>
      </div>

      <div>


        <table class="blueTable">
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

</div>

</div>
<div class="button_add">
<a href="">
    <img class="button_add_img"src="{{ url('/assets/images/icons/document-download.png') }}" alt="">
</a>
Tải về
</div>
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
