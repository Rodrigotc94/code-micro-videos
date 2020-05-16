<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use Traits\Uuid, SoftDeletes;

    protected $fillable = ['name', 'is_active'];
    protected $casts = [
        'id' => 'string',
    ];
}
