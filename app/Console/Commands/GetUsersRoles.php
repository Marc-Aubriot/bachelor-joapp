<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class GetUsersRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-users-roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get all users with their roles ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $all_users_with_all_their_roles = User::with('roles')->get();

        $this->info($all_users_with_all_their_roles);
    }
}
