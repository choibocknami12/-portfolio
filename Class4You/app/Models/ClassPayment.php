<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassPayment extends Model
{
    use HasFactory;

    protected $primaryKey = 'PaymentID';

    protected $fillable = [
        'EnrollmentID',
        'PaymentAmount',
        'PaymentMeans',
        'PaymentState',
    ];
}
