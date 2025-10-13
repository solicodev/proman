<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $permissions = [
            'dep_projects', 'dep_tasks', 'dep_departments', 'dep_category', 'dep_files', 'dep_members', 'dep_managers', 'dep_reports', 'dep_access', 'dep_messages',
            'dep_tickets', 'dep_comments', 'manager_projects', 'manager_tasks', 'manager_departments', 'manager_category', 'manager_files', 'manager_members',
            'manager_managers', 'manager_reports', 'manager_access', 'manager_messages', 'manager_tickets', 'manager_comments', 'member_projects', 'member_tasks',
            'member_departments', 'member_category', 'member_files', 'member_members', 'member_managers', 'member_reports','member_reports','member_access','member_messages',
            'member_tickets','member_comments','assign_projects','assign_tasks','assign_departments','assign_category','assign_files','assign_members','assign_managers',
            'assign_reports','assign_access','assign_messages','assign_tickets','assign_comments'
        ];
        foreach ($permissions as $permission) {
            $exist = Permission::where('name', $permission)->first();
            if (!$exist) {
                Permission::create(['name' => $permission]);
            }
        }
    }
}
