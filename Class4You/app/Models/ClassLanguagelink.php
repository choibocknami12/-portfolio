<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassLanguagelink extends Model
{
    use HasFactory;

    public function language() {
        return $this->belongsTo(ClassLanguage::class, 'ClassLanguageID');
    }

    protected $fillable = [
        'ClassID',
        'ClassLanguageID',
    ];
}
