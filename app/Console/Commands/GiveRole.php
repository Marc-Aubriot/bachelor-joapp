<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class GiveRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:give-role {userId} {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give a role to user';

    /**
     * Execute the console command.
     */
    public function handle()
    {   
        $user_id = $this->argument('userId');
        $role = $this->argument('role');

        $user = User::find($user_id);
        $user->assignRole($role);

        $this->info("User named ".$user->firstname." is now an ".$role);
    }
}
