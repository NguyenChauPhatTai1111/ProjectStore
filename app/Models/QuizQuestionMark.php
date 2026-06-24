<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestionMark extends Model
{
    protected $fillable = [
        'user_id',
        'quiz_id',
        'question_id',
    ];
}
