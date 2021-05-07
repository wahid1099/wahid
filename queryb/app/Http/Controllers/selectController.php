<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class selectController extends Controller
{
    function UniqueSelect(){
        $result= DB::table('students')->distinct()->get();
        return  $result;
    }

    function singleColumnSelect(){
        $result= DB::table('students')->select('name')->get();
        return  $result;

    }

    function multiColumnSelect(){
        $result= DB::table('students')->select('name','roll')->get();

        return  $result;

    }

}
