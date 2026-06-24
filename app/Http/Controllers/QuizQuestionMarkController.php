<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestionMark;
use Illuminate\Http\Request;

class QuizQuestionMarkController extends Controller
{
    //
    public function toggle($quizId, $questionId)
    {
        $userId = request()->user()->id;
        $mark = QuizQuestionMark::where([
            'user_id' => $userId,
            'quiz_id' => $quizId,
            'question_id' => $questionId,
        ])->first();

        if ($mark) {
            $mark->delete();
            return response()->json(['marked' => false, 'message' => 'Đã bỏ đánh dấu câu hỏi đặc biệt thành công']);
        }

        QuizQuestionMark::create([
            'user_id' => $userId,
            'quiz_id' => $quizId,
            'question_id' => $questionId,
        ]);

        return response()->json(['marked' => true, 'message' => 'Đánh dấu câu hỏi đặc biệt thành công']);
    }
    public function list($quizId)
        {
            $userId = request()->user()->id;

            $marks = QuizQuestionMark::where([
                'user_id' => $userId,
                'quiz_id' => $quizId,
            ])->pluck('question_id');

            return response()->json($marks);
        }
}
