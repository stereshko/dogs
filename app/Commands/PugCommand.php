<?php

namespace App\Commands;

use App\Models\Pug;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class PugCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'pug {action}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Мопс';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pug = new Pug();

        switch ($this->argument('action')) {
            case 'voice':
                $this->info($pug->voice());
                break;
            case 'hunt':
                $this->info('Мопсу лениво охотиться');
                break;
            default:
                $this->info('Мопс этого не умеет');
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
