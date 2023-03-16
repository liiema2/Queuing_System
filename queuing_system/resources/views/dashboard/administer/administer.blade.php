@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">


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
        <form  method="get">
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
                    <div class="col-auto" style="margin-left: 50px;"  >
                        <div>Từ khóa</div>
                        <input type="text" class="form-select1  form-select filter-keyword">
                    </div>
                </div>
            </form>
            </div>

        <div>


      </form>

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
            <tbody >



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


@endsection
