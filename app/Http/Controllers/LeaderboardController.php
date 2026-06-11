<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;

class LeaderboardController extends Controller
{
    public function leaderboard()
    {
        return QuizResult::with('user')
            ->orderByDesc('score')
            ->limit(20)
            ->get();
    }
}
