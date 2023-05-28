<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    use ImageTrait;
    public function listadd($id){
        return view('panel.listadd',compact('id'));
    }
    public function addto(Request $request,$id){
        $path = $this->getimg($request,'playlist');
        Playlist::create([
            'title'=>$request->title,
            'course_id'=>$id,
            'video'=>$request->video,
            'photo'=>$path,
        ]);
        return redirect()->back();
    }
}
