<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Relacion poliformica

    // public function imageable()
    // {
    //     return $this->morphTo();
    // }


    public function post()
    {
        return $this->hasOne(Post::class, 'imageable');
    } 
}
