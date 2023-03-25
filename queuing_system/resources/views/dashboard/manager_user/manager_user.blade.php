@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<link rel="stylesheet"  href="{{ asset('../assets/css/service/servicemenudate.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Quản lý tài khoản</div> </div>
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

<div class="informtion_page--Orange">Danh sách tài khoản</div>

<div class="informtion_page_connter">

    <div class="container">
        {{-- {{ route('devices.index', [$status, $connection, $keyword]) }} --}}
        <form action="{{route('manager_user.index')}}" class="body_connter_service" method="get">
                 <div class="row justify-content-between">


                    <div class="col-sm-6 col-md-4 mb-3" style="padding-left:0 ">
                        <div>Trạng thái hoạt động</div>
                        <select class="form-select filter-status">
                            <option selected value="">Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="0">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-auto" style="margin-right: 16px;"  >
                        <div>Từ khóa</div>
                        <input type="text" class="form-select1  form-select filter-keyword">
                    </div>
                    </div>

                </div>
            </form>
            </div>

        <div>


      </form>

        <table class="blueTable" style="margin-right:0px!important ">
            <thead>
            <tr>
            <th>Tên đăng nhập</th>
            <th>Họ Tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Trang thái</th>
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
                @foreach ($account as $item)
                    <tr>



                        <td>{{$item->username}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone_number}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role}}</td>
                        <td>
                            @if ($item->status == 1)
                            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt="">    Kết nối
                            @else
                            <img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối
                            @endif


                        </td>
                        <td><a href="{{route('manager_updated',['id'=>$item->id])}}">Cập nhật</a></td>
                    </tr>



                @endforeach

            </tbody>
            </table>
      </div>

</div>

</div>
@section('foter_end')

<div class="button_add">
    <a href="{{ route('manager_user_more') }}">
        <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
    </a>
    Thêm <br> tài khoản
    </div>
@endsection
@endsection

@section('scripts')
<script>

// <div class="col-sm-6 col-md-4 mb-3" style="padding-left:0 ">
//                         <div>Trạng thái hoạt động</div>
//                         <select class="form-select filter-status">
//                             <option selected value="">Tất cả</option>
//                             <option value="1">Hoạt động</option>
//                             <option value="0">Ngưng hoạt động</option>
//                         </select>
//                     </div>
//                     <div class="col-auto" style="margin-right: 16px;"  >
//                         <div>Từ khóa</div>
//                         <input type="text" class="form-select1  form-select filter-keyword">
//                     </div>


$('.form-select').change(function() {
    searchDevices();
  });

  // Thực hiện khi nhập từ khóa
  $('.filter-keyword').on('input', function() {
    searchDevices();
  });



  function updateTableData(status,  keyword) {
  $.ajax({
    type: 'GET',
    url: '{{ route('manager_user.index') }}',
    data: {
      status: status,
      keyword: keyword,
    },
    success: function(data) {
  var accounts = data.accounts;
  var html = '';
  if (accounts && accounts.length > 0) {
    accounts.forEach(function(account) {
      html += '<tr>';
      html += '<td>' + account.username + '</td>';
      html += '<td>' + account.name + '</td>';
      html += '<td>' + account.phone_number + '</td>';
      html += '<td>' + account.email + '</td>';
      html += '<td>' + account.role + '</td>';
      html += '<td class="td_comtus">';
      if (account.status == 1) {
        html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (3).png') }}" alt=""> Kết nối';
      } else {
        html += '<img src="{{ url('/assets/images/icons/status/Ellipse 1 (2).png') }}" alt=""> Không kết nối';
      }
      html += '</td>';
      html += '<td><a href="{{route('manager_updated',['id'=>$item->id])}}">Cập nhật</a></td>';
      html += '</tr>';
    });
  } else {
    html += '<tr><td colspan="7">Không tìm thấy kết quả</td></tr>';
  }
  $('tbody').html(html);
},

    error: function() {
      alert('Đã xảy ra lỗi!');
    }
  });
}
function searchDevices() {
  var status = $('.filter-status').val();
//   var connection = $('.filter-connection select').val();
  var keyword = $('.filter-keyword').val();
  updateTableData(status,  keyword);
}





</script>
@endsection
