<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class myPostSeeder extends Seeder
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
        for($i=0;$i<100;$i++){
            DB::table('myPosts')->insert([
                'title'=>$faker->sentence(5),
                'body'=>$faker->paragraph(4),
            ]);

        }

    }
}
