<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nomVideo','video' 
    ];
   

    

    

    public function categories()
    { 
        return $this->belongsTo(Category::class); 
    }

    public function commentaires()
    { 
        return $this->belongsTo(Commentaire::class); 
    }

}
