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
        {{-- {{ route('devices.index', [$status, $connection, $keyword]) }} --}}
        <form action="{{ route('devices.index') }}" method="get">
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


            </tbody>
            </table>
      </div>

</div>

</div>
@section('foter_end')

<div class="button_add">
    <a href="{{ route('more') }}">
        <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
    </a>
    Thêm vai trò
    </div>
@endsection
@endsection

@section('scripts')
<script>









</script>
@endsection
