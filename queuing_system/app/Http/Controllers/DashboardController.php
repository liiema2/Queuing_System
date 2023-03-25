<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $chartData = [
            ["label" => "Venezuela", "value" => "290"],
            ["label" => "Saudi", "value" => "260"],
            ["label" => "Canada", "value" => "180"],
            ["label" => "Iran", "value" => "140"],
            ["label" => "Russia", "value" => "115"],
            ["label" => "UAE", "value" => "100"],
            ["label" => "US", "value" => "30"],
            ["label" => "China", "value" => "30"]
          ];
          $chartConfigs = [
            //Specify the chart type
            'type' => 'column2d',
            //Set the container object
            'renderAt' => 'chart-container',
            //Specify the width of the chart
            'width' => '100%',
            //Specify the height of the chart
            'height' => '400',
            //Set the type of data
            'dataFormat' => 'json',
            'dataSource' => [
                'chart' => [
                    //Set the chart caption
                    'caption' => 'Countries With Most Oil Reserves [2017-18]',
                    //Set the chart subcaption
                    'subCaption' => 'In MMbbl = One Million barrels',
                    //Set the x-axis name
                    'xAxisName' => 'Country',
                    //Set the y-axis name
                    'yAxisName' => 'Reserves (MMbbl)',
                    'numberSuffix' => 'K',
                    //Set the theme for your chart
                    'theme' => 'fusion'
                ],
                // Chart Data from Step 5
                'data' => $chartData
            ]
        ];

        return view('dashboard.a',['chartConfigs'=> $chartConfigs]);
    }
}
