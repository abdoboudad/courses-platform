<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Playlist;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class PlatformController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('platform.home',['courses'=>$courses]);
    }

    public function about(){
        return view('platform.about');
    }

    public function contact(){
        return view('platform.contact');
    }

    public function courses(){
        $courses = Course::all();
        $playlist = Playlist::all();
        return view('platform.courses',['courses'=>$courses,'playlist'=>$playlist]);
    }

    public function teachers(){
        $teachers = Teacher::all();
        return view('platform.teachers',compact('teachers'));
    }

    public function profile($id){
        $user = User::find($id);
        return view('platform.profile',compact('user'));
    }

    public function playlist($id){
        $course = Course::find($id);
        $courses = Course::all();
        $playlist = Playlist::all();
        return view('platform.playlist',compact('course','courses','playlist'));
    }
    public function watch($id){
        $playlist = Playlist::find($id);
        $course = $playlist->courses;
        return view('platform.watch',compact('playlist','course'));
    }
}
