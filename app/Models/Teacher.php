<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory; 
    protected $fillable = ['name','bio','categorie','path','password','user_id','email','level'];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
   
}
