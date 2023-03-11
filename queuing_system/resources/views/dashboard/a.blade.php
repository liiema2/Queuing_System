@extends('components.navbars.menuDashboard')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/device/device_infor.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/menu/acccount_information.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

@endsection
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thông tin cá nhân</div>
    <div class="nvarContent_right">
        <div>
            <img src="{{ url('/assets/images/icons/notification.png') }}" alt="">

            <img class="imgas_user" src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2Q.png') }}"
                alt="">

            <div class="nvarContent_right-xc">
                <div>xin chào</div>
                <div>{{ session('username')}}</div>
            </div>

        </div>



    </div>

</div>




</div>

<div>



</div>

<div class="informtion_page">

    <div id="chart_div"></div>

</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    // Remove this line
    // drawChart();
});

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(function() {
    drawChart();
});

function drawChart() {
    $.getJSON("{{ url('/chart-data') }}", function(data) {
        var chartData = [['Date', 'Count']];
        $.each(data, function(index, value) {
            chartData.push([value.date, parseInt(value.count)]);
        });

        var options = {
            title: 'My Chart Title',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(google.visualization.arrayToDataTable(chartData), options);
    });
}
</script>
@endsection
