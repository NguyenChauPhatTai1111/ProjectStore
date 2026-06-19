<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\QuizAttempt;
class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
             return Quiz::withCount('questions')->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            return Quiz::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
            return $quiz->load('questions.answers');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
          $quiz->update($request->all());

        return $quiz;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
           $quiz->delete();

        return response()->json();
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $score = 0;

        foreach ($request->answers as $item) {

            $answer = Answer::find($item['answer_id']);

            if ($answer && $answer->is_correct) {
                $score++;
            }
        }

        $totalQuestions = count($request->answers);

        $percentage = round(
            ($score / $totalQuestions) * 100,
            2
        );

        QuizAttempt::create([
            'user_id' => auth()->id(),
            'quiz_id' => $quiz->id,

            'score' => $score,

            'correct_answers' => $score,

            'wrong_answers' => $totalQuestions - $score,

            'total_questions' => $totalQuestions,

            'percentage' => $percentage,

            'finished_at' => now(),
        ]);

        return response()->json([
            'score' => $score,
            'correct_answers' => $score,
            'wrong_answers' => $totalQuestions - $score,
            'percentage' => $percentage,
        ]);
    }
    public function history()
    {
        return QuizAttempt::with('quiz')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();
    }
    public function statistics()
    {
        $attempts = QuizAttempt::where(
            'user_id',
            auth()->id()
        );

        return response()->json([
            'total_attempts' => $attempts->count(),

            'best_score' => $attempts->max('score'),

            'average_score' => round(
                $attempts->avg('score'),
                2
            ),

            'average_percentage' => round(
                $attempts->avg('percentage'),
                2
            ),
        ]);
    }
}
