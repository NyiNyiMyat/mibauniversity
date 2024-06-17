<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_stu',
        'name',
        'course',
        'type',
        'dob',
        'email',
        'emailtype',
        'comm',
        'photo',
        'month',
        'day',

    ];

}
