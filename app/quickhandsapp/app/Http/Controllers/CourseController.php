<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function newCourse(Request $request) {
        $name = $request->name;
        $count = $request->count;
        $lore = $request->lore;
        $video_names=$request->video_names;
        $course = new Course();
        $course->name = $name;
        $arr =  explode(',', $video_names);
        $associative_array = array_combine(range(1, sizeof($arr)), $arr);
        $course->steps = json_encode($associative_array);
        $course->lore = $lore;
        $course->save();
        return redirect('/cpanel');
    }
}
