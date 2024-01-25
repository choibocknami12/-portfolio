<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function board() {
        return $this->belongsTo(Board::class, 'BoardID');
    }

    public function comment() {
        return $this->belongsTo(Comment::class, 'CommentID');
    }

    protected $table = 'reports';

    protected $primaryKey = 'ReportID';

    protected $fillable = [
        'ReportID',
        'UserID',
        'BoardID',
        'CommentID',
        'ReportContent',
        'ReportState',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i');
    }
}
