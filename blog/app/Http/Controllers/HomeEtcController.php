<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeEtcController extends Controller
{

    function SelectVideoHome(){

        $result = DB::table('home_etc')->select('video_description','video_url')->get();

        return $result;

    }


  
    function TotalProjectClientHome(){

        $result = DB::table('home_etc')->select('total_project','total_client')->get();

        return $result;

    }



    function SelectTechDescription(){

        $result = DB::table('home_etc')->select('tech_description')->get();

        return $result;

    }




    function SelectHomeTopTitle(){

        $result = DB::table('home_etc')->select('home_title','home_subtitle')->get();

        return $result;

    }




    
}
