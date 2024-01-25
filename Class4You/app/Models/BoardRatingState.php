<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardRatingState extends Model
{
    use HasFactory;

    protected $primaryKey = 'RatingStateID';

    protected $fillable = [
        'BoardID',
        'UserID',
        'BoardRating',
    ];
}
