<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\DemoModel;


class ChartDataController extends Controller
{

    function onAllSelect(){


        $result = DB::select('select * from chart_data');

        return $result;


    }


   
}
