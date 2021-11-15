<?php

namespace App\Console\Commands;
use \DateTime;
use App\Models\User;
use Illuminate\Console\Command;


class Superuser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:superuser';

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
     * @return int
     */
    public function handle()
    {
        $name=$this->ask("Whats Your Name? : ");
        $email=$this->ask("Whats Your Email? : ");
        $password=$this->ask('Whats Your Password? : ');
        $confirm_password=$this->ask('Type Your Password Again? : ');
        if ($password=== $confirm_password){
            if($this->confirm('This process will create your superuser Do you wanna continue?')){
                $temp=new User();
                $temp->name=$name;
                $temp->email=$email;
                $temp->password=$password;
                $temp->role='admin';
                $temp->email_verified_at=new DateTime();
                $temp->setpassword();
                $temp->save();
                return Command::SUCCESS;
            }

        }
        return Command::FAILURE;
    }
}
