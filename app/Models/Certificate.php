<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable =[
        'pro',
        'pay',
        'nrcf',
        'nrcb',

        'course',
        'campus',
        'intake',
        'type',
        'fullname',
        'gender',
        'dob',
        'nrc',

        'nation',
        'relig',
        'father',
        'stu_ph',
        'email',
        'address',
        'month',
        'day',
    ];

}
