<?php

namespace Baseline\Console\Commands;

use Illuminate\Console\Command;

class ResetApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'baseline:reset-app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run a fresh migration and seed the DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  \App\Support\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');

        return 0;
    }
}