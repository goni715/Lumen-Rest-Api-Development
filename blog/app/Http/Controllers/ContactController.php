<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    



    function onContactDataSend(Request $req){

        $myJsonData = $req->getContent();

        $ContactArray = json_decode($myJsonData,true);

        $name = $ContactArray['name'];
        $email = $ContactArray['email'];
        $message = $ContactArray['message'];

        $insertData = [
              'name' => $name,
              'email' => $email,
              'message' => $message
        ];


        $result = DB::table('contact_table')->insertOrIgnore($insertData);

        if($result==true){
             
            return 1;
        } 
        else{
           
            return 0;

        }

   }






  /*
     function onContactDataSend(Request $req){

          $name = $req->input('name');
          $email = $req->input('email');
          $message = $req->input('message');

          $insertData = [
                'name' => $name,
                'email' => $email,
                'message' => $message
          ];


          $result = DB::table('contact_table')->insertOrIgnore($insertData);

          if($result==true){
               
              return "Contact Data Insert Success";
          } 
          else{
             
              return "Insert Fail";

          }

     }*/








}
