<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable =[
        'courseid',
        'banner', 
        'tumbnail',
        'category', 
        'coursetype',
        'coursename',
        'description1',
        'description2',
        'description3',
        'description4',
    ];
}
