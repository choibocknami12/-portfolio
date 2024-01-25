<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassNote extends Model
{
    use HasFactory, SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function enrollment() {
        return $this->belongsTo(Enrollment::class, 'EnrollmentID');
    }

    protected $table = 'class_notes';

    protected $primaryKey = 'ClassNoteID';

    protected $fillable = [
        'EnrollmentID',
        'ClassNoteID',
        'ClassNoteComment',
        'created_at',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i');
    }
}
