<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $primaryKey = 'InstructorID';

    protected $fillable = [
        'InstructorID',
        'InstructorEmail',
        'InstructorPassword',
        'InstructorFullName',
        'InstructorPhoneNumber',
        'InstructorHistory',
        'InstructorFlg',
    ];

    protected $hidden = [
        'InstructorPassword',
    ];
}
