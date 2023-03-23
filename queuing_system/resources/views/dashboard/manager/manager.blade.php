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
    <div class="nvarContent-information">Cài đặt hệ thống  <img src="{{ url('/assets/images/icons/Vector (1).png') }}" alt=""> <div>Quản lý vai trò</div> </div>
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

<div class="informtion_page--Orange">Danh sách vai trò</div>

<div class="informtion_page_connter">

    <div class="container"  >
        {{-- {{ route('devices.index', [$status, $connection, $keyword]) }} --}}
        <form action="{{ route('devices.index') }}" method="get">

                    <div class="col-auto" style="margin-left:72%; "  >
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
            <th>Tên Vai trò</th>
            <th>Số người </th>

            <th>Mô tả</th>
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
            {{-- @foreach ($account as $item)
            <tr>
                    <td>
                       {{ $item->count}}
                    </td>
                    <td>
                        @php

                    $number_role = DB::table('accounts')->get();


                       @endphp
                        {{ $number_role}}
                    </td>
                    <td> {{ $item->description}}</td>

                    <td><a href="{{route('update_more_administer',['id' => $number_role->id])}}">Cập nhật</a></td>
                </tr>
            @endforeach --}}
            @foreach ($account as $item)
    <tr>
        <td>
            {{ $item->count }}
        </td>
        <td>
            {{ $item->role }}
        </td>
        <td>
            {{ $item->description }}
        </td>
        <td>
            <a href="">Cập nhật</a>
        </td>
        {{-- <td> --}}
            {{-- @php

            $number_role = DB::table('accounts')->get();


               @endphp --}}
               {{-- href="{{ route('update_more_administer', ['id' => $item->id]) }}" --}}


        {{-- </td> --}}
    </tr>
@endforeach
            </table>
      </div>

</div>

</div>
@section('foter_end')

<div class="button_add">
    <a href="{{ route('administer_more') }}">
        <img class="button_add_img"src="{{ url('/assets/images/icons/buton/add-square.png') }}" alt="">
    </a>
    Thêm vai trò
    </div>
@endsection
@endsection

@section('scripts')
<script>






//////////////////////////////////////////////////////////////////////////////////









</script>
@endsection
