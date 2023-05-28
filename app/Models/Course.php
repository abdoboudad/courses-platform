<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['id', 'title', 'image', 'video', 'categorie', 'time','user_id', 'created_at', 'updated_at'];
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function playlist(){
        return $this->hasMany(Playlist::class,'course_id');
    }
}
