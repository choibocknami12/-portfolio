<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassInfo extends Model
{
    use HasFactory;
    public function languageLink() {
        return $this->belongsTo(ClassLanguageLink::class, 'ClassLanguageID');
    }

    public function enrollments() {
        return $this->belongsTo(Enrollment::class, 'UserID');
    }

    protected $table = 'class_infos';

    protected $fillable = [
        'ClassTitle',
        'ClassDescription',
        'ClassImg',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i');
    }
}
