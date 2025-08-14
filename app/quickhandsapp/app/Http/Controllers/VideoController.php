<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VideoController extends Controller
{

    public function index() {
        return view('uploadVideo');
    }
    // public function upload(Request $request)
    // {

    //     if(Request::hasFile('file')){

    //         $file = Request::file('file');
    //         $filename = $file->getClientOriginalName();
    //         $path = public_path().'/uploads/';
    //         return $file->move($path, $filename);
    //     }

    // }
      public function upload(Request $request)
    {
        // Проверка валидности входных данных
        $validatedData = $request->validate([
            'video' => 'required|file|max:1000240', // ограничение размера файла (примерно 10 Мб)
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
            $video->link="/storage/videos/$id.mp4";
            
            $path = Storage::disk('public')->putFileAs('videos', $request->file('video'),"$id.mp4");
            $video->save();
            return response()->json(['message' => 'Видео успешно загружено.', 'url' => asset($path)]);
        }
    
        return response()->json(['error' => 'Ошибка загрузки'], 400);
    }
}

