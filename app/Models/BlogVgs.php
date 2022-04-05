<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogVgs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'options',
        'profile_image',
        'head',
        'description'
    ];

    public $timestamps = false;
}
