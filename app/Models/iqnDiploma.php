<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iqnDiploma extends Model
{
    use HasFactory;
    protected $fillable =[
        'pro',
        'pay',
        'nrcf',
        'nrcb',
        
        'course',
        'degreefile',
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
