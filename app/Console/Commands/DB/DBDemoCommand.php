<?php

namespace App\Console\Commands\DB;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DBDemoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run this command for locally run pos';

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
        $this->info('Working....');

        $this->setMemoryLimit('500M');
        $this->setExecutionTime(500);

        Artisan::call('optimize:clear');

        Artisan::call('clear-compiled');
        Artisan::call('view:clear');

        Artisan::call('config:clear');
        Artisan::call('cache:clear');

        Artisan::call('migrate:fresh --force');

        Artisan::call('db:seed', [
            '--class' => '\Database\Seeders\DBDemoSeeder',
            '--force' => true
        ]);
        $this->info('Done');

    }

    /**
     * @param string $size
     */
    public function setMemoryLimit($size = '256M')
    {
        ini_set('memory_limit', $size);
    }

    /**
     * @param int $time
     */
    public function setExecutionTime($time = 300)
    {
        set_time_limit($time);
    }
}

