<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    // Table name
    protected $table = 'tags';

    // Fields that can be autofilled
    protected $fillable = ['name', 'is_active'];

    public function todos(): BelongsToMany
    {
        return $this->belongsToMany(Todo::class);
    }

}
