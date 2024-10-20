<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillabe = ['name', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
