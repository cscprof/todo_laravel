<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Table name
    protected $table = 'tags';

    // Fields that can be autofilled
    protected $fillable = ['name', 'is_active'];

}
