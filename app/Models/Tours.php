<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'time',
        'created',
        'start',
        'price',
        'img',
        'status',
    ];

    public $timestamps = false;
}
