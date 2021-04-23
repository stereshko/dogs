<?php

namespace App\Commands;

use App\Models\RubberDachshund;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class RubberDachshundCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'rubber-dachshund {action}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Резиновая такса с пищалкой';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $rubberDachshund = new RubberDachshund();

        switch ($this->argument('action')) {
            case 'voice':
                $this->info($rubberDachshund->voice());
                break;
            case 'hunt':
                $this->info('Резиновая такса с пищалкой не охотится');
                break;
            default:
                $this->info('Резиновая такса с пищалкой этого не умеет');
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
