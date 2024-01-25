<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonState extends Model
{
    use HasFactory;
    protected $primaryKey = 'LessonStateID';

    protected $fillable = [
        'ChapterStateID',
        'EnrollmentID',
        'LessonID',
        'LessonProgress',
        'LessonRunningTime',
        'LessonFlg',
    ];
}
