<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    function onDelete(){
        $result=  DB::table('students')->truncate();

    }

}
