<?php

namespace App\Commands;

use App\Models\PlushLabrador;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class PlushLabradorCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'plush-labrador {action}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Плюшевый лабрадор';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $plushLabrador = new PlushLabrador();

        switch ($this->argument('action')) {
            case 'voice':
                $this->info('Плюшевый лабрадор не издает звуков');
                break;
            case 'hunt':
                $this->info('Плюшевый лабрадор не охотится');
                break;
            default:
                $this->info('Плюшевый лабрадор этого не умеет');
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
