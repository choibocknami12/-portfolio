<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function enrollment() {
        return $this->belongsTo(Enrollment::class, 'UserID');
    }

    protected $table = 'reviews';

    protected $primaryKey = 'ReviewID';

    // erd보고 확인해야함.
    // whiteList(허용목록)<->BlackList(금지목록)
    // 배열에 입력이 가능한 컬럼, 지정칼럼외 배열에 값이 있어도 무시함
    protected $fillable = [
        'EnrollmentID',
        'ReviewID',
        'UserID',
        'ReviewComment',
        'ReviewRating',
        'created_at',
    ];

    // 현재시간 변경
    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i');
    }
}
