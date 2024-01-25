<?php

namespace App\Models;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'comments';

    protected $primaryKey = 'CommentID';

    protected $fillable = [
        'BoardID',
        'UserID',
        'CommentID',
        'InstructorID',
        'CommentContent',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d');
    }
}
