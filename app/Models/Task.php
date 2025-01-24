<?php

namespace App\Models;

use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'is_completed',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
        'due_date' => 'datetime',
    ];
}
