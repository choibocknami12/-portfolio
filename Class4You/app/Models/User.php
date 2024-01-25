<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $primaryKey = 'UserID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'UserEmail',
        'UserPassword',
        'UserPhoneNumber',
        'UserName',
        'UserBirthDate',
        'UserPostcode',
        'UserRoadAddress',
        'UserDetailedAddress',
        'UserTermsofUse',
        'UserPrivacy',
        'UserState',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'UserPassword',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d');
    }

    public function userStatus()
    {
        return $this->hasOne(UserStatus::class, 'UserID', 'UserID');
    }

}
