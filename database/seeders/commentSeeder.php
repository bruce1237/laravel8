<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentSeeder extends Seeder
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
        for($i =0;$i<100;$i++){
            DB::table('comments')->insert([
                'comment'=>$faker->sentence(4),
                'post_id'=>random_int(1,100),
            ]);
        }
    }
}
