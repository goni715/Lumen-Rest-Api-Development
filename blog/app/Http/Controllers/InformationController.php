<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InformationController extends Controller
{
    
    function onSelect(){

        $result = DB::table('information_etc')->get();
         
        return $result;

     }


}
