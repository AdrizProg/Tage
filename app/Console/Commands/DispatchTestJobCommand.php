<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob;


class DispatchTestJobCommand extends Command
{
    protected $signature = 'dispatch:test-job';
    protected $description = 'Dispatch a test job';

    public function handle()
    {
        dispatch(new TestJob());

        $this->info('Test job dispatched.');
    }
}
