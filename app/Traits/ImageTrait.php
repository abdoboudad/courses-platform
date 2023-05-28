<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageTrait
{
    public function getimg(Request $request,$foldername){
        $path = $request->file('photo')->store($foldername,'images');
        return $path;
    }
}
