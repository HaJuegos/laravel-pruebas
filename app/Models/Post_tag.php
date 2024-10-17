<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    protected $table = 'post_tags';

    protected $fillable = ['post_id', 'tag_id'];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}
