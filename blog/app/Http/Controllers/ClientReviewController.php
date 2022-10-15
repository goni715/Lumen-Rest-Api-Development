<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientReviewController extends Controller
{

    function onAllSelect(){


        $result = DB::select('select * from client_review');
        return $result;


    }
    
}
