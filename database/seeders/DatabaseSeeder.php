<?php

namespace Database\Seeders;
use Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
  
     public function run()
    {
        User::create([
           'name'       => 'Sandhika Galih',
           'username'   => 'sandhikagalih',
           'email'      => 'sandhikagalih@gmail.com',
           'password'   => bcrypt('password'),
           'is_admin'   => 1
        ]);
    
       User::factory(3)->create();

       Category::create([
           'name' => 'Sitor Situmorang.',
           'slug' => 'sitor-situmorang.'
       ]);

       Category::create([
           'name' => 'Sapardi Djoko Damono',
           'slug' => 'sapardi-djoko-damono'
       ]);

       Category::create([
            'name' => 'Chairil Anwar',
            'slug' => 'chairil-anwar'
        ]);

       Post::factory(7)->create();
    }
}
