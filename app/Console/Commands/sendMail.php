<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\Email;

class sendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail for forgot password';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
