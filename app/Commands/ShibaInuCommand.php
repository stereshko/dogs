<?php

namespace App\Commands;

use App\Models\ShibaInu;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ShibaInuCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'shiba-inu {action}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Сиба-ину';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $shibaInu = new ShibaInu();

        switch ($this->argument('action')) {
            case 'voice':
                $this->info($shibaInu->voice());
                break;
            case 'hunt':
                $this->info($shibaInu->hunt());
                break;
            default:
                $this->info('Сиба-ину этого не умеет');
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
