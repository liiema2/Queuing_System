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
          <div class="col-auto">
            <div>Trạng thái hoạt động</div>
            <select class="form-select">
              <option  selected>tất cả</option>
              <option  value="1">Lựa chọn 1</option>
              <option value="2">Lựa chọn 2</option>
              <option value="3">Lựa chọn 3</option>
            </select>
          </div>
          <div class="col-auto">
            <div>Trạng thái kết nối</div>
            <input type="date" id="date-input" name="date-of-birth">
          </div>
          <div class="col-auto">
            <div>Trạng thái kết nối</div>
            <input type="date" id="date-input" name="date-of-birth">
          </div>
          <div class="col-auto">
            <div>Trạng thái hoạt động</div>
            <select class="form-select">
              <option  selected>tất cả</option>
              <option  value="1">Lựa chọn 1</option>
              <option value="2">Lựa chọn 2</option>
              <option value="3">Lựa chọn 3</option>
            </select>
          </div>
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
            <th>Mã thiết bị</th>
            <th>Tên thiết bị</th>
            <th>Mô tả</th>
            <th>Trạng thái kết nối</th>

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
            <tbody >

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

               <td>  <a href="">Chi tiết</a>
               </td>
               <td>  <a href="">Cập nhật</a> </td>


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
    </a>
    Thêm vai trò
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
