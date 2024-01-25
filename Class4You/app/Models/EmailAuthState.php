<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAuthState extends Model
{
    use HasFactory;

    protected $primaryKey = 'EmailAuthStateID';

    protected $fillable = [
        'UserID',
        'EmailStatus',
        'EmailToken',
    ];
}
