<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mergeController extends Controller
{
    function mergeData(){
        $students=DB::table('students')->get();
        $examMarks=DB::table('exam_marks')->get();
        $totalData=$students->merge($examMarks);


        return  $users;

    }

}
