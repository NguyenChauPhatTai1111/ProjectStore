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
        $quiz = Quiz::create([
            'title' => 'Laravel Basic',
            'description' => 'Laravel Quiz'
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Laravel được viết bằng ngôn ngữ nào?'
        ]);

        Answer::insert([
            [
                'question_id' => $q1->id,
                'answer_text' => 'PHP',
                'is_correct' => true
            ],
            [
                'question_id' => $q1->id,
                'answer_text' => 'Java',
                'is_correct' => false
            ],
            [
                'question_id' => $q1->id,
                'answer_text' => 'Python',
                'is_correct' => false
            ],
            [
                'question_id' => $q1->id,
                'answer_text' => 'C#',
                'is_correct' => false
            ],
        ]);
    }
}