<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CourseController extends Controller
{
    

     function onSelectHome(){

        $result = DB::table('courses_table')->limit(4)->get();

        return $result;

     }





     function onSelectAll(){

         $result = DB::table('courses_table')->get();
         
         return $result;
        
    }




    
    function onSelectDetails(Request $req){


       $myJsonData = $req->getContent();
       $CourseDetailsArray = json_decode($myJsonData,true);

       $id = $CourseDetailsArray['id'];

       $result = DB::table('courses_table')->where('id','=', $id)->get();

        return $result;
        
    }
    



    /*function onSelectDetails(Request $req){

        $id = $req->input('id');

       $result = DB::table('courses_table')->where('id','=', $id)->get();

        return $result;
        
    }*/




}
