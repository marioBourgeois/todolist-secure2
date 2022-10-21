<?php

namespace App\Models;

use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['commentaires', 'user_id', 'video_id'];


    public function users() 
    { 
        return $this->hasMany(User::class); 
    }


    public function videos() 
    { 
        return $this->hasMany(Video::class); 
    }

   

}
