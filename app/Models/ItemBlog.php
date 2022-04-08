<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'status',
        'stats',
    ];

    public static function store($data)
    {
    }

    public $timestamps = false;
}
