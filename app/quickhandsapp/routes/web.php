<?php

use App\Http\Controllers\AdvController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CPanelController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\FLPubController;
use App\Http\Controllers\HowPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isAuthed;
use App\Models\Advert;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', function (){
    return redirect('/home');
})->middleware(isAuthed::class);
Route::get('/home', [HomeController::class, 'index'])->middleware(isAuthed::class);
Route::get('/auth', [AuthController::class, 'form']);
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/reg', [RegistrationController::class, 'registration']);
Route::post('/reg', [RegistrationController::class, 'createUser']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware(isAuthed::class);
Route::get('/users/{id}', [UserController::class, 'showProfile'])->middleware(isAuthed::class);
Route::get('/cpanel', [CPanelController::class, 'index'])->middleware(isAuthed::class);
Route::get('/howpage', [HowPageController::class, 'index'])->middleware(isAuthed::class);
Route::get('/profile', [UserController::class, 'personalProfile'])->middleware(isAuthed::class)->name('profile');
Route::post('/banuser', [UserController::class, 'banUser'])->middleware(isAdmin::class);
Route::post('/unbanuser', [UserController::class, 'unbanUser'])->middleware(isAdmin::class);
Route::get('/banned', function () {
   return view('banned') ;
});
Route::get('/chats', [App\Http\Controllers\ChatController::class, 'chats'])->middleware(isAuthed::class)->name('chats');
Route::get('/chats/{id}', [App\Http\Controllers\ChatController::class, 'index'])->middleware(isAuthed::class);
Route::get('/messages/{id}', [ChatController::class, 'messages'])
    ->name('messages'); //ОЧЕНЬ СТРЁМНО
Route::post('/message/{id}', [ChatController::class, 'message'])
    ->name('message')->middleware(isAuthed::class);
Route::post('/newcourse', [CourseController::class, 'newCourse'])->middleware(isAuthed::class);
Route::get('/setcourse/{id}', [App\Http\Controllers\CPanelController::class, 'setCourse'])->middleware(isAuthed::class);
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/pay', function(){
    return view('defaultError');
})->name('pay');