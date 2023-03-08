@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

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
                <div> <a href="{{route('user')}}">{{ session('username')}}</a> </div>
            </div></a>


        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">

<div class="informtion_page--Orange">Danh sách thiết bị</div>

<div class="informtion_page_connter">

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div>Trạng thái hoạt động</div>
                        <select class="form-select filter-status">
                            <option selected value="">Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="0">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-3 filter-connection">
                        <div>Trạng thái kết nối</div>
                        <select class="form-select">
                            <option selected value="">Tất cả</option>
                            <option value="1">Kết nối</option>
                            <option value="0">Mất kết nối</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-3 filter-connection ">
                        <div>Từ khóa</div>
                        <input type="text" class="form-select1  form-select filter-keyword">
                    </div>
                </div>
            </div>

      <div>


        <table class="blueTable">
            <thead>
            <tr>
            <th>Mã thiết bị</th>
            <th>Tên thiết bị</th>
            <th>Địa chỉ ip</th>
            <th>Trạng thái hoạt động</th>
            <th>Trạng thái kết nối</th>
            <th>Dịch vụ sử dụng</th>
            <th></th>
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
            <tbody>


           @foreach ($devices as $device)
           <tr>
           <td>
            {{ $device->code }} </td>
          <td>  {{ $device->nameDevice }} </td>
          <td>  {{ $device->ip_address }} </td>
          <td class="td_comtus">  @if ($device->status == 1)
          <img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt="">  Kết nối
      @else
      <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối
      @endif </td>
          <td class="td_comtus">
            @if ($device->connection == 1)
            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt="">    Kết nối
            @else
            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối
            @endif
          </td>
          <td class="td_list">
            <a href="#" class="service_link">{{ $device->service }}</a>

  <a class="more_list" href="#">Xem thêm</a>
  <div class="information_service" style="display: none;">
    Khám tim mạch, Khám Sản - Phụ Khoa,Khám răng hàm mặt Khám tai mũi họng, Khám Hô hấp, Khám tổng quát

  </div>
            </td>

          {{-- <td class="td_list">
            {{ $device->service }}
            <br>
            <a class="more_list" href="#" onclick="toggleService()" id="service_link">xem thêm</a>
            <a href="#" style="display:none; text-decoration: none;" class="information_service" id="service_info">Khám tim mạch, Khám Sản - Phụ Khoa,Khám răng hàm mặt Khám tai mũi họng, Khám Hô hấp, Khám tổng quát </a>
        </td> --}}
        {{-- <td class="td_list" id="service_td">
            <span id="service_content">{{ $device->service }}</span>
            <br>
            <a class="more_list" href="#" onclick="toggleService()" id="service_link">xem thêm</a>
            <a href="#" style="display:none; text-decoration: none;" class="information_service" id="service_info">Khám tim mạch, Khám Sản - Phụ Khoa,Khám răng hàm mặt Khám tai mũi họng, Khám Hô hấp, Khám tổng quát </a>
        </td> --}}

        {{-- <a href="{{ route('details', ['id' => $device->id]) }}" --}}

          <td>  <a href="{{ route('details', ['id' => $device->id]) }}">Chi tiết</a>
          </td>
          <td>  <a href="{{ route('update_devices', ['id' => $device->id]) }}">Cập nhật</a> </td>


                </tr>
           @endforeach
            </tbody>
            </table>
      </div>

</div>

</div>
@section('foter_end')

<div class="button_add">
    <a href="">
        <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
    </a>
    Thêm vai trò
    </div>
@endsection
@endsection

@section('scripts')
<script>

/// Lấy danh sách các liên kết "xem thêm", phần tử "service_link" và phần tử "information_service"
// const moreLinks = document.querySelectorAll('.more_list');
// const infoServices = document.querySelectorAll('.information_service');
// const Services = document.querySelectorAll('.service_link');

// // Xử lý sự kiện cho từng liên kết "xem thêm"
// moreLinks.forEach(function(moreLink, index) {
//   const serviceLink = moreLink.previousElementSibling; // Phần tử "service_link" tương ứng
//   const infoService = infoServices[index]; // Phần tử "information_service" tương ứng

//   // Xử lý sự kiện khi người dùng bấm vào liên kết "xem thêm"
//   moreLink.addEventListener('click', function(event) {
//     event.preventDefault(); // Ngăn chặn hành động mặc định khi bấm vào liên kết

//     // Ẩn phần tử "service_link" và "more_list"
//     serviceLink.style.display = 'none';
//     moreLink.style.display = 'none';
//     // Services.style.display = 'none';
//     // Hiển thị phần tử "information_service"
//     infoService.style.display = 'block';
//   });

//   // Xử lý sự kiện khi người dùng bấm vào phần tử "information_service"
//   infoService.addEventListener('click', function() {
//     // Ẩn phần tử "information_service"
//     infoService.style.display = 'none';

//     // Hiển thị phần tử "service_link" và "more_list"
//     serviceLink.style.display = 'block';
//     moreLink.style.display = 'block';
//     // Services.style.display = 'block';
//   });
// });


const moreLinks = document.querySelectorAll('.more_list');
const infoServices = document.querySelectorAll('.information_service');
const Services = document.querySelectorAll('.service_link');

// Xử lý sự kiện cho từng liên kết "xem thêm"
moreLinks.forEach(function(moreLink, index) {
  const serviceLink = moreLink.previousElementSibling; // Phần tử "service_link" tương ứng
  const infoService = infoServices[index]; // Phần tử "information_service" tương ứng

  // Xử lý sự kiện khi người dùng bấm vào liên kết "xem thêm"
  moreLink.addEventListener('click', function(event) {
    event.preventDefault(); // Ngăn chặn hành động mặc định khi bấm vào liên kết

    // Ẩn phần tử "service_link" và "more_list"
    serviceLink.style.display = 'none';
    moreLink.style.display = 'none';
    Services.forEach(function(service) {
      service.style.display = 'none';
    });

    // Hiển thị phần tử "information_service"
    infoService.style.display = 'block';
  });

  // Xử lý sự kiện khi người dùng bấm vào phần tử "information_service"
  infoService.addEventListener('click', function() {
    // Ẩn phần tử "information_service"
    infoService.style.display = 'none';

    // Hiển thị phần tử "service_link" và "more_list"
    serviceLink.style.display = 'block';
    moreLink.style.display = 'block';
    Services.forEach(function(service) {
      service.style.display = 'block';
    });
  });
});



    $(document).ready(function() {
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/users',
            data: function (d) {
                d['filter-status'] = $('.filter-status').val();
                d['filter-connection'] = $('.filter-connection').val();
                d['filter-keyword'] = $('.filter-keyword').val();
            }
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status'},
            {data: 'connection', name: 'connection'}
        ]
    });
});





</script>
@endsection
