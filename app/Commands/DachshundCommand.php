<?php

namespace App\Commands;

use App\Models\Dachshund;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class DachshundCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dachshund {action}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Такса';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dachshund = new Dachshund();

        switch ($this->argument('action')) {
            case 'voice':
                $this->info($dachshund->voice());
                break;
            case 'hunt':
                $this->info($dachshund->hunt());
                break;
            default:
                $this->info('Такса этого не умеет');
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
