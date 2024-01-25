<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;

    protected $primaryKey = 'LessonID';

    protected $fillable = [
        'ChapterID',
        'LessonTitle',
        'LessonContent',
        'LessonVideoID',
        'LessonAllRunningTime',
        'LessonRunningTime',
        'LessonProgress',
        'LessonFlg',
    ];
    
}
