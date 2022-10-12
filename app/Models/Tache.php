<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = ['nomTache', 'etat', 'user_id'];

    public function users() 
    { 
        return $this->hasMany(User::class); 
    }
}
