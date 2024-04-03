<?php

namespace Database\Seeders;

use App\Model\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++){
            User::create9([
                'name'=>$faker->name,
                'username'=>$faker->userName,
                'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llCntLmteyv'
            ]);
        }
    }
}