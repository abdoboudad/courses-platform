<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    use ImageTrait;
    public function saveteacher(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:teachers|unique:users',
            'bio'=>'required',
            'categorie'=>'required',
            'password'=>'required',
            'photo'=>'required',
        ]);
        $path = $this->getimg($request,'teachers');
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Teacher::create([
            'name'=>$request->name,
            'user_id'=>$user->id,
            'email'=>$request->email,
            'bio'=>$request->bio,
            'categorie'=>$request->categorie,
            'password'=>$request->password,
            'path'=>$path,
            'level'=>'teacher',
        ]);
       
        return redirect()->route('teacher')->with('tsave','teacher has beene created');
    }
    public function tremove($id){
        Teacher::find($id)->delete();
        return redirect()->route('teacher');
    }
}
