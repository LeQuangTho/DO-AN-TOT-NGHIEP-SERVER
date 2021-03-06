<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    protected $table = 'ratings';

    protected $fillable = [
        'communication_rate',
        'skill_rate',
        'assessment',
        'secure',
        'checkout',
        'comment',
        'task_id',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }

    protected $hidden = [
        'created_at',
        'updated_at',
        'created_by',
    ];
}
