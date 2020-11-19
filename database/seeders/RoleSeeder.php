<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            'admin',
            'worker',
            'HR',
            'developer',
            'manager'
        ];
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name'=>$role,
            ]);

        }
    }
}
