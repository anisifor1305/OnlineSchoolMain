<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CPanelController extends Controller
{
    function index() {
        if (  $user = User::where('id', auth()->id())->first()->is_admin){
            return view('cpanel');
        }
        else{
            return view('accessError');
        }
    }
    function setCourse(string $id) {
        $user = User::where('id', auth()->id())->first();
        $id = $id; //Мб аргументом
        $courses = $user->courses;
        $steps = $user->steps;
        if ($courses && $steps){
            $arrCourses = json_decode($courses, true);
            array_push($arrCourses, $id);
            $arrSteps = json_decode($steps, true);
            $arrSteps[$id]='2';
            $user->courses = $arrCourses;
            $user->steps = $arrSteps;
        } else{
            $arrCourses = [];
            array_push($arrCourses, $id);
            $arrSteos = array();
            $arrSteps[$id]='2';
            $user->courses = $arrCourses;
            $user->steps = $arrSteps;
        }
        $user->save();
    }
}
