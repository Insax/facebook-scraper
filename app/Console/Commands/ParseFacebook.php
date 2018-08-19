<?php

namespace App\Console\Commands;

use App\SitesToParse;
use Illuminate\Console\Command;
use Facebook;

class ParseFacebook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'facebook:parse';

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
        $sites = SitesToParse::get();
        foreach($sites as $site) {
            $facebook = Facebook::get($site->site_id.'/feed', env('FACEBOOK_OATH_TOKEN'));
        }

        var_dump($facebook);
    }
}
