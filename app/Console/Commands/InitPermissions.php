<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class InitPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init-permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create permissions';

    /**
     * Execute the console command.
     */
    public function handle()
    {   
        $roleAmount = 0;
        $permissionAmount = 0;

        //  init roles
        $client_role = Role::findOrCreate('client');
        $employee_role = Role::findOrCreate('employee');
        $admin_role = Role::findOrCreate('admin');
        $roleAmount++;
        $permissionAmount++;

        //  give 'access backoffice' permission to employees and admins
        $access_backoffice_permission = Permission::findOrCreate('access backoffice');
        $employee_role->givePermissionTo($access_backoffice_permission); 
        $admin_role->givePermissionTo($access_backoffice_permission); 
        $roleAmount++;
        $permissionAmount++;

        //  give 'access clientpanel' permission to client
        $access_clientpanel_permission = Permission::findOrCreate('access clientpanel');
        $client_role->givePermissionTo($access_clientpanel_permission); 

        $this->info("Created ".$roleAmount." Roles and ".$permissionAmount." Permissions");
    }
}
