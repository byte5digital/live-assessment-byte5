<?php

namespace App\Models;

use Database\Factories\CandyBarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandyBar extends Model
{
    /** @use HasFactory<CandyBarFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'popularity',
        'contains_chocolate',
        'last_bought'
    ];

    protected $casts = [
        'contains_chocolate' => 'boolean',
        'last_bought' => 'datetime',
    ];
}
