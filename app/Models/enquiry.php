<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquiry extends Model
{
    use HasFactory;
    protected $fillable =[
        'fullname', 
        'email',
        'phone', 
        'age',
        'work_experience',
        'education_background',
        'course',
        'location',
        'message',
    ];

}
