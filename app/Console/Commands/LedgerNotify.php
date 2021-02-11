<?php

namespace App\Console\Commands;

use App\Events\LedgerUpdated;
use Illuminate\Console\Command;

class LedgerNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ledger:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        LedgerUpdated::dispatch();
        return 0;
    }
}
