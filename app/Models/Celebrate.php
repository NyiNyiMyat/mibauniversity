<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celebrate extends Model
{
    use HasFactory;
    protected $fillable =[
        'banner',
        'image1',
        'image2',
        'image3',
        'image4',

        'name',
        'date',
        'time',
        'location',
        'description',
    ];
}
