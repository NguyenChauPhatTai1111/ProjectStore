<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        for ($quizIndex = 1; $quizIndex <= 10; $quizIndex++) {

            $quiz = Quiz::create([
                'title' => "Quiz {$quizIndex}",
                'description' => "Bài kiểm tra số {$quizIndex}",
                'is_active' => true,
            ]);

            for ($questionIndex = 1; $questionIndex <= 15; $questionIndex++) {

                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => "Đây là câu hỏi {$questionIndex} của Quiz {$quizIndex}?",
                    'image' => null,
                ]);

                $correctAnswer = rand(1, 4);

                for ($answerIndex = 1; $answerIndex <= 4; $answerIndex++) {

                    Answer::create([
                        'question_id' => $question->id,
                        'answer_text' => "Đáp án {$answerIndex}",
                        'is_correct' => $answerIndex === $correctAnswer,
                    ]);
                }
            }
        }
    }
}