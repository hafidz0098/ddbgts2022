<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Rumpun;
use App\Models\Status;

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
            'name' => 'Hafidz',
            'username' => 'hafidz_hafidz',
            'email' => 'hafidznak123@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1
        ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Rumpun::create([
            'name' => 'Saintek',
            'slug' => 'saintek'
        ]);

        Rumpun::create([
            'name' => 'Soshum',
            'slug' => 'soshum'
        ]);

        Status::create([
            'name' => 'Pending',
            'slug' => 'pending'
        ]);

        Status::create([
            'name' => 'Sukses',
            'slug' => 'sukses'
        ]);

        Status::create([
            'name' => 'Gagal',
            'slug' => 'gagal'
        ]);
        

        // Post::factory(20)->create();
    }
}
