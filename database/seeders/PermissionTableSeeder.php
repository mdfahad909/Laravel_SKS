<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'info-create',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'gallery-list',
            'gallery-create',
            'gallery-edit',
            'gallery-delete',
            'event-list',
            'event-create',
            'event-edit',
            'event-delete',
            'donation-list',
            'donation-create',
            'donation-edit',
            'donation-delete',
            'member-list',
            'member-create',
            'member-edit',
            'member-delete',
            'goal-list',
            'goal-create',
            'goal-edit',
            'goal-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
