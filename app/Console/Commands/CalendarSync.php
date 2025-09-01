<?php

namespace App\Console\Commands;

use App\Models\Calendar;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CalendarSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calendar:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Calendars';

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
        $this->info('Starting calendar sync...');
        $added = Calendar::syncAll();
        $this->info('Calendar sync completed.');
        Log::info('Calendars synced: ' . $added);
    }
}
