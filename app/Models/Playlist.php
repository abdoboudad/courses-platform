<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable=['title','video','course_id','photo'];
    public function courses(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
