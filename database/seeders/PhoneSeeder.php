<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        for($i=1;$i<11;$i++){
            DB::table('phones')->insert([
                'phone'=>$faker->phoneNumber(),
                'user_id'=>$i,
                'created_at'=>$faker->dateTime(),
                'updated_at'=>$faker->dateTime(),
            ]);
        }
    }
}
