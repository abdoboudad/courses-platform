<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    use ImageTrait;
    public function savestudent(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:teachers|unique:users',
            'password'=>'required',
            'photo'=>'required',
        ]);
        $path = $this->getimg($request,'students');
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'path'=>$path,
            'level'=>'student',
            'user_id'=>$user->id,
        ]);
        
        return redirect()->route('student');
    }
    public function sremove($id){
        Student::find($id)->delete();
        return redirect()->route('student');
    }
}
