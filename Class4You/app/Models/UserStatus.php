<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    protected $primaryKey = 'UserStatusID';

    protected $fillable = [
        'UserID',
        'UserStatus',
        'SuspensionType',
        'SuspendedUntil',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d');
    }
}
