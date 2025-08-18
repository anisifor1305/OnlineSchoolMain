<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    function index(string $id) {
        $courseId = $id[0];
        $videoStep = (int)substr($id, 1);
        $video = Video::where('course_id', $courseId)->where('step',$videoStep)->first();
        if($video){
            $videoLink = $video->link;
            $videoLore = $video->lore;
            $steps = json_decode(Course::where('id', $courseId)->first()->steps);
            $stepName = $steps[$videoStep-1];
            return view('lesson', ['link'=>$videoLink, 'lore'=>$videoLore, 'name'=>$stepName, 'courseId'=>$courseId, 'videoStep'=>$videoStep, 'videoNames'=>json_encode($steps)]);
        }
        else{
            return view('accessError');
        }
    
    }
}
