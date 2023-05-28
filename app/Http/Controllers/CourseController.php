<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    use ImageTrait;
    public function savecourse(Request $request){
        $request->validate([
            'title'=>'required',
            'video'=>'required',
            'categorie'=>'required',
        ]);
        $path = $this->getimg($request,'courses');
        Course::create([
            'title'=>$request->title,
            'user_id'=>Auth::user()->id,
            'image'=>$path,
            'video'=>$request->video,
            'categorie'=>$request->categorie,
            'time'=>$request->time,
        ]);
        return redirect()->route('admin.create')->with('csave','course has been created with successfuly');
    }
}
