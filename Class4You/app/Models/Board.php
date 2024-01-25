<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
{
    use HasFactory, SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function enrollment() {
        return $this->belongsTo(Enrollment::class, 'UserID');
    }

    protected $primaryKey = 'BoardID';

    protected $fillable = [
        'BoardCategoryID',
        'UserID',
        'BoardTitle',
        'BoardComment',
        'BoardView',
        'BoardRecommended',
        'BoardNotRecommended',
        'BoardFlg',
        'created_at',
        'ClassID',
        'BoardInstructorFlg'
    ];


    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i');
    }

}
