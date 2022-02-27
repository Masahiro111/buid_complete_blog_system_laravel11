<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class miniCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:gm {--books=15} {--max=3}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'mini kaihatsu';

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
        echo "";
        $this->line("<fg=green>Laravel Brejet Auth Gene.</>");
        $this->line("<fg=green>- Multi Auth Generator for Laravel Breeze & Jetstream -</>");

        return 0;
    }
}
