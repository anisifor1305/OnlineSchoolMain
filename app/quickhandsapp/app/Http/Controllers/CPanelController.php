<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Models\Video;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveCallbackFilterIterator;

class CPanelController extends Controller
{
    function index() {
        if (  $user = User::where('id', auth()->id())->first()->is_admin){
            $dirPath = storage_path('app/private');
            $videoExtensions = ['mp4', 'mkv', 'avi'];
            
            $iterator = new RecursiveDirectoryIterator($dirPath);
            $filteredIterator = new RecursiveCallbackFilterIterator(
                $iterator,
                function ($current, $key, $iterator) use ($videoExtensions) {
                    if ($current->isDir()) return true;
                    
                    $extension = pathinfo($current->getFilename(), PATHINFO_EXTENSION);
                    return in_array(strtolower($extension), $videoExtensions);
                }
            );
            
            $videoFiles = [];
            foreach(new RecursiveIteratorIterator($filteredIterator) as $fileInfo) {
                $videoFiles[] = [
                    'name' => $fileInfo->getBasename(),
                    'path' => $fileInfo->getRealPath()
                ];
            }
            $videoFiles = array_slice($videoFiles, 4);
            $courses = Course::all();
            $videos = Video::all();
            $directory = storage_path('app/public/videos');
            $videospath = File::files($directory);
            return view('cpanel', ['courses'=>$courses, 'videos'=>$videos, 'videospath'=>$videospath, 'videoFiles'=>$videoFiles]);
        }
        else{
            return view('accessError');
        }
    }
    function setCourse(string $id) {
        $user = User::where('id', auth()->id())->first();
        $courses = $user->courses;
        $steps = $user->steps;
        if ($courses!=null){
            $arrCourses = json_decode($courses, true);
            foreach ($arrCourses as $course) {
                if($course==$id){
                    return view('starwarsError', ['exception'=>new Exception('error')]);
                }
            }
            array_push($arrCourses, $id);
            $arrSteps = json_decode($steps, true);
            $arrSteps[$id]='1';
            $user->courses = $arrCourses;
            $user->steps = $arrSteps;
            $user->save();  
            return redirect('/cpanel');
        } else {
            $arrCourses = array();
            array_push($arrCourses, $id);
            $arrSteps = array();
            $arrSteps[$id]='1';
            $user->courses = $arrCourses;
            $user->steps = $arrSteps;
            $user->save();
            return redirect('/cpanel');
        }
    }
}
