<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake = Factory::create();
        for($i=0;$i<10;$i++){
            DB::table('users')->insert([
                'name'=>$fake->name(),
                'email'=>$fake->email(),
                'email_verified_at'=>$fake->dateTime(),
                'password'=>$fake->md5(),
                'remember_token'=>$fake->windowsPlatformToken()

            ]);

        }
    }
}
