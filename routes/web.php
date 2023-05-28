<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.pages.welcome');
})->name('index');
Route::get('services',[LandingController::class,'services'])->name('services');
Route::get('aboutme',[LandingController::class,'about'])->name('about');
Route::get('contactus',[LandingController::class,'contact'])->name('contact');

Route::get('dashboard',[PlatformController::class,'index'])->name('platform.index');
Route::get('courses',[PlatformController::class,'courses'])->name('platform.courses');
Route::get('contact',[PlatformController::class,'contact'])->name('platform.contact');
Route::get('about',[PlatformController::class,'about'])->name('platform.about');
Route::get('teachers',[PlatformController::class,'teachers'])->name('platform.teachers');
Route::get('profile/{id}',[PlatformController::class,'profile'])->name('platform.profile');
Route::get('playlist/{id}',[PlatformController::class,'playlist'])->name('platform.playlist');
Route::get('watch/{id}',[PlatformController::class,'watch'])->name('platform.watch');

Route::get('admin/listadd/{id}',[PlaylistController::class,'listadd'])->name('listadd');
Route::post('admin/addto/{id}',[PlaylistController::class,'addto'])->name('addto');
Route::get('admin/teacher',[AdminpanelController::class,'teachers'])->name('teacher');
Route::get('admin/student',[AdminpanelController::class,'student'])->name('student');
Route::get('admin/playlist',[AdminpanelController::class,'playlist'])->name('playlist');
Route::get('admin/domain',[AdminpanelController::class,'domain'])->name('domain');
Route::get('admin/top',[AdminpanelController::class,'top'])->name('top');
Route::get('admin/admins',[AdminpanelController::class,'admins'])->name('admins');
Route::resource('admin',AdminpanelController::class);

Route::post('savestudent',[StudentController::class,'savestudent'])->name('savestudent');
Route::post('sremove/{id}',[StudentController::class,'sremove'])->name('sremove');


Route::post('saveteacher',[TeacherController::class,'saveteacher'])->name('saveteacher');
Route::post('tremove/{id}',[TeacherController::class,'tremove'])->name('tremove');


Route::post('saveadmin',[AdminController::class,'saveadmin'])->name('saveadmin');
Route::post('aremove/{id}',[AdminController::class,'aremove'])->name('aremove');

Route::post('savecourse',[CourseController::class,'savecourse'])->name('savecourse');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
