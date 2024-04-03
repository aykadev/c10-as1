<?php

namespace Database\seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(50)->create();
        Category::factory(10)->create(); 
    }
}
