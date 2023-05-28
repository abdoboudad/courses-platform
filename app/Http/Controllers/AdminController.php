<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use ImageTrait;
    public function saveadmin(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:teachers',
            'password'=>'required',
            'photo'=>'required',
        ]);
        $path = $this->getimg($request,'students');
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'path'=>$path,
            'level'=>'admin',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        
        return redirect()->route('admins');
    }
    public function aremove($id){
        Admin::find($id)->delete();
        return redirect()->route('admins');
    }
}
