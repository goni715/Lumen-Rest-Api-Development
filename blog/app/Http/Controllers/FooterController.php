<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FooterController extends Controller
{
    
     function onSelect(){

        $result = DB::table('footer_table')->get();
         
        return $result;

     }


}
