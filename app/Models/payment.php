<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_stu',
        'name',
        'phone',
        'course',
        'email',
        'address',
        'amount',
        'payment_type',
        'payment_installment',
        'payment_invoice',
        'payment_receipt',
        'total_payment',
    ];

}
