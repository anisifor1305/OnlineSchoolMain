<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VideoController extends Controller
{

    public function index() {
        return view('uploadVideo');
    }
    public function show(string $video)
    {
        $link = "/video/$video";
        $currentVideo = Video::where('link', $link)->first();
        $user = User::where('id', auth()->id())->first();
        $courses = json_decode($user->courses);
        try{
            foreach ($courses as $course) {
            if ($course==$currentVideo->course_id){
                    return response()->file(storage_path("app/private/videos/$video"));
            }
            }
            return view('starwarsError', ['exception'=>new Exception('error')]);
        }
        catch(Exception $e){
            return view('starwarsError', ['exception'=>new Exception('error')]);
        }
    
    }

    public function upload(Request $request)
    {
        // Проверка валидности входных данных
        $validatedData = $request->validate([
            'video' => 'required|file|max:1000240',
        ]);
    
        if ($request->hasFile('video')) {
            $video = new Video();
            $video->lore=$request->lore;
            $video->step=$request->step;
            $video->course_id =$request->course_id;
            $lastVideo = Video::query()
        ->orderBy('id', 'desc')
        ->first();
            if(!$lastVideo){
                $lastId = 0;
            } else{
                $lastId = $lastVideo->id;
            }
            $id = $lastId+1;
            $video->link="/video/$id.mp4";
            $path =  $request->file('video')->storeAs('videos',"$id.mp4");
            
            // $path = Storage::disk('private')->putFileAs('videos', $request->file('video'),"$id.mp4");
            $video->save();
            return response()->json(['message' => 'Видео успешно загружено.', 'url' => asset($path)]);
        }
    
        return response()->json(['error' => 'Ошибка загрузки'], 400);
    }
    public function makeLinkIndex(Request $request)
    {
        return view('makeLink');
    }
    public function makeLink(Request $request)
    {
        try{
            $video = new Video();
            $video->lore=$request->lore;
            $video->step=$request->step;
            $video->course_id =$request->course_id;
            $video->link="/video/$request->video";

            $video->save();
            return redirect('/cpanel');
        } catch(Exception $e){
            return view('starwarsError', ['exception'=>$e]);
        }
    
        return response()->json(['error' => 'Ошибка загрузки'], 400);
    }
    public function removeVideo(string $link) {
        $link = "/video/$link";
        $video = Video::where('link', $link)->first();
        try{
            $video->delete();
            return redirect('/cpanel');
        } 
        catch(Exception $e){
            return view('starwarsError', ['exception'=>$e]);
        }
    }
}

