<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\QuizAttempt;

class ClearOldQuizHistory extends Command
{
    protected $signature = 'quiz:clear-history';

    protected $description = 'Delete quiz histories from previous days';

    public function handle(): int
    {
        $deleted = QuizAttempt::query()
            ->whereDate('created_at', '<', today())
            ->delete();

        $this->info("Deleted {$deleted} old quiz histories.");

        return self::SUCCESS;
    }
}