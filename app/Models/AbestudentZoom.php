<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbestudentZoom extends Model
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

        'occupation',
        'com_name',
        'com_ph',
        'ad_year',
        'university',
        'degree',
        'major',
        'other_ql',
        'location',
        'certificate',

        'ad_date',
        'em_name',
        'em_rela',
        'em_comph',
        'month',
        'day',
    ];
}
