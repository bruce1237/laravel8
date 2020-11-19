<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 100; $i++) { 
            DB::table('students')->insert([
                'name' => $faker->name(),
                'email'=>$faker->email(),
                'phone'=>$faker->phoneNumber(),
            ]);
        }

    }
}
