<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'created',
        'status',
        'author'
    ];

    public $timestamps = false;

    // function timeCreated() {
       
        // return $this->created->diffForHumans(Carbon::now('Asia/Ho_Chi_Minh'));
        // $dt = Carbon::create($this->created);
        // $now = Carbon::now('Asia/Ho_Chi_Minh');

        // return 'updated '.Carbon::now('Asia/Ho_Chi_Minh')->diffForHumans(Carbon::create($this->created));
        // return $dt;
        // return $now;
        // $myDate = '2022-04-02 10:24:54';
        // $result = Carbon::createFromFormat('Y-m-d H:i:s', $myDate)->diffForHumans();
  
        // return ($result);
    // }
}
