<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    
    function onSelectHome(){

        $result = DB::table('projects_table')->limit(3)->get();

        return $result;

     }



     function onSelectAll(){

        $result = DB::table('projects_table')->get();
        
        return $result;
       
   }




   function onSelectDetails(Request $req){

        $id = $req->input('id');

        $result = DB::table('projects_table')->where('id','=', $id)->get();

         return $result;
    
    }









}
