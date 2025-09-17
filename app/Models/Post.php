<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'excerpt', 'text'];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}
