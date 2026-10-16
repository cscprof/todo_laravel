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

}
