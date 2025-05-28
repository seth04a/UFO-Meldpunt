<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
        protected $fillable = [
        'title',
        'category_id',
        'timestamp',
        'location',
        'content',
        'user_id',
        'image',
        'is_hidden'
    ];
}
