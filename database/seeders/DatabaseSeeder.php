<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'name' => 'Adam',
            'email' => 'adam555@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Peograming',
            'slug' => 'web-programing',
            
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            
        ]);

        Post::create([
            'name' => 'Judul 1',
            'slug' => 'judul-1',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ullam nostrum, quisquam velit amet enim veritatis quo, ducimus delectus ea sequi deleniti sit?',
            'category_id' => 1,
            'category_id' => 1


        ]);

        Post::create([
            'name' => 'Judul 2',
            'slug' => 'judul-2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ullam nostrum, quisquam velit amet enim veritatis quo, ducimus delectus ea sequi deleniti sit?',
            'category_id' => 1,
            'category_id' => 1


        ]);
        Post::create([
            'name' => 'Judul 3',
            'slug' => 'judul-3',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ullam nostrum, quisquam velit amet enim veritatis quo, ducimus delectus ea sequi deleniti sit?',
            'category_id' => 2,
            'category_id' => 1


        ]);
    }
}

