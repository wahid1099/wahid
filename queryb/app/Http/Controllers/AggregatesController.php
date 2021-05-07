<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AggregatesController extends Controller
{
    function countRow(){
        $result=  DB::table('students')->count();
        return $result;
    }

    function maxRow(){
        $result=  DB::table('students')->max('id');
        return $result;
    }

    function minRow(){
        $result=  DB::table('students')->min('id');
        return $result;
    }

    function avgRow(){
        $result=  DB::table('students')->avg('roll');
        return $result;
    }

}
