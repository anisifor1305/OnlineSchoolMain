<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Course;
use App\Models\FLPub;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function showProfile(string $id) {
        if ($id == auth()->id()){
            return redirect('/profile');
        }
        $user = User::where('id', $id)->first();
        $bal =  User::where('id', auth()->id())->first()->balance;
        if ($user->is_verified){
            $status = 'Верифицирован';
        }
        else{
            $status = 'Не верифицирован. Будьте аккуратнее.';
        }
        return view('userProfile', ['firstname'=>$user->firstname, 'lastname'=>$user->lastname, 'status'=>$status, 'about'=>$user->about,
    'balance'=>$user->balance, 'lore'=>$user->lore]);

    }
    function personalProfile() {
        $user = User::where('id', auth()->id())->first();
        $firstname = $user->firstname;
        $lastname = $user->lastname;
        $courses = json_decode($user->courses);
        $coursesInfo = [];
        if ($courses){
            foreach ($courses as $course) {
                $currentCourse = Course::where('id', $course)->first();
                $courseInfo = array();
                array_push($courseInfo, $currentCourse->id);
                array_push($courseInfo, $currentCourse->name);
                array_push($courseInfo, $currentCourse->lore);
                array_push($courseInfo, $currentCourse->steps);
                array_push($coursesInfo, $courseInfo);
            }
        }
        else {
            $coursesInfo = null;
        }
        $steps = $user->steps;
        $coursesInfo = json_encode($coursesInfo);
        return view('personalProfile', ['firstname'=>$firstname, 'lastname'=>$lastname, 'steps'=>$steps, 'coursesInfo'=>$coursesInfo]);

    }
    function banUser(Request $request) {
        $user = User::where('id', $request->userid)->first();
        $user->banned=1;
        $user->save();
        return redirect('/cpanel');
    }
    function unbanUser(Request $request) {
        $user = User::where('id', $request->userid)->first();
        $user->banned=0;
        $user->save();
        return redirect('/cpanel');
    }
}
