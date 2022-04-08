<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VGS extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'user_name',
        'img_name',
        'text'
    ];

    public $timestamps = false;
}
