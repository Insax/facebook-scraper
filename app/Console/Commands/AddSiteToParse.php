<?php

namespace App\Console\Commands;

use App\SitesToParse;
use Illuminate\Console\Command;

class AddSiteToParse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'facebook:add {id}';

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
     * @return mixed
     */
    public function handle()
    {
        SitesToParse::create(array('site_id', $this->argument('id')));
    }
}
