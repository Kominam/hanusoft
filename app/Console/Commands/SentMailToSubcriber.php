<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Subcriber;

use Mail;

use App\Mail\MailToSubcriber;

class SentMailToSubcriber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:subcriber';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail for subcriber';

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
        $subcribers = Subcriber::all();
        foreach ($subcribers as $subcriber) {
            Mail::to($subcriber->email)->send(new MailToSubcriber());
        }
        
    }
}
