<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SchoolPersonnelRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Faculty Member',
        ]);

        Role::create([
            'name' => 'Security Personnel',
        ]);

        Role::create([
            'name' => 'Clinician'
        ]);

        Role::create([
            'name' => 'Principal',
        ]);

        Role::create([
            'name' => 'School Registrar',
        ]);

        Role::create([
            'name' => 'Admin',
        ]);
    }
}
