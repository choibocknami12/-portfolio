<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardLanguagelink extends Model
{
    use HasFactory;

    protected $primaryKey = 'BoardCategorylinkID';

    protected $fillable = [
        'BoardID',
        'HTMLFlg',
        'CSSFlg',
        'JavaScriptFlg',
        'PHPFlg',
        'JAVAFlg',
        'DataBaseFlg',
    ];

}
