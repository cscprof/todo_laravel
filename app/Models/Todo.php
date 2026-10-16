<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Todo extends Model
{
    protected $table = 'todos';

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function likedBy(): BelongsToMany
    {
        // Second parameter is the name of the pivot table since
        // it is not the standard convention of todo_user
        return $this->belongsToMany(User::class, 'likes');
    }

}
