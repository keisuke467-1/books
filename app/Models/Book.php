<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //指定したカラムに対してのみ、 create()やupdate()
    //fill()が可能になる。
    protected $fillable = [
        'title',
        'price',
    ];
}
