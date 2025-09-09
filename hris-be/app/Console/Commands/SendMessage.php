<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;

class SendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-people';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert people';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Employee::create(['name' => 'test', 'email' => 'test@gmail.com', 'password' => 'password']);
        
    }
}
