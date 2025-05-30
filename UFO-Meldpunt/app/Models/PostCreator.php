<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostCreator extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public $timestamps = false;
}
