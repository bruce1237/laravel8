<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 20; $i++) { 
            DB::table('role_users')->insert([
                'user_id'=> random_int(1,10),
                'role_id'=> random_int(1,5),
            ]);
        }
    }
}
