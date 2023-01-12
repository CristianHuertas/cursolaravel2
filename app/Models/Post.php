<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\User;


class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    //camos que no se pueden asignar de manera masiva
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relacion uno a muchos inversa user
    public function user()
    {
        // return $this->belongsTo(User::class);
        return $this->hasOne(User::class, 'id', 'user_id');
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
        return $this->hasOne(Image::class, 'id', 'images_id');
    } 


}
