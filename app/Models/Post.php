<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // Relacion uno a muchos inversa user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion uno a muchos inversa category

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos a muchos tags

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Relacion poliformica
    
    // public function image()
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

   public function image()
    {
        return $this->hasOne(Image::class, 'imageable');
    } 


}
