<?php

namespace App\Console\Commands;

use App\Notifications\SendNotification;
use Illuminate\Console\Command;
use App\Models\Employee;
use Illuminate\Support\Facades\Notification;

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
        $employee = Employee::where('id', '=', 1)->get(); 

        
        Notification::send($employee, new SendNotification());
    }
}
