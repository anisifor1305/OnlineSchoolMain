<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
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
        $arr =  explode(';', $video_names);
        // $associative_array = array_combine(range(1, sizeof($arr)), $arr);
        $course->steps = json_encode($arr);
        $course->lore = $lore;
        $course->save();
        return redirect('/cpanel');
    }
    function deleteCourse(string $id) {
        $course = Course::where('id', $id)->first();
        if (!$course){
            return view('starwarsError');
        }
        else{
            $course->delete();
        }
        return redirect('/cpanel');
    }
}
