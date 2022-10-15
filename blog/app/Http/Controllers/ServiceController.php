<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    
    function onSelect(){

        $result = DB::table('services_table')->get();
         
        return $result;

     }


}
