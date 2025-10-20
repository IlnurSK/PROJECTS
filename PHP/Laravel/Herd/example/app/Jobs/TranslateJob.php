<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
//        logger('hello from TranslateJob');
//        AI:translate($this->jobListing->description, 'russian'); // Пример реализации задания используя внешний API
            logger('Translating ' . $this->jobListing->title . ' to Spanish.');
    }
}
