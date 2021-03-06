<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = [
        'user_id',
        'post_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'created_by',
    ];
}
