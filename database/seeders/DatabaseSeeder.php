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
            'password' => bcrypt('valodulugan@123'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Alfonsus Avianto',
            'username' => 'alfonsus',
            'email' => 'alfonsusaviantochandrawan@gmail.com',
            'password' => bcrypt('sayangeurico69'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Alfian',
            'username' => 'alfian',
            'email' => 'Alfiantriwahyus@gmail.com',
            'password' => bcrypt('Valoterus123'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Rifky',
            'username' => 'Rifky',
            'email' => 'rifky.ilsss19@gmail.com',
            'password' => bcrypt('gamingnonstop19'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Delisya',
            'username' => 'delisya',
            'email' => 'Delisyajayadi@gmail.com',
            'password' => bcrypt('kochengoren12'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Agil',
            'username' => 'agil',
            'email' => 'Agilwnaldi@gmail.com',
            'password' => bcrypt('kangcarrypit'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Alifiah',
            'username' => 'alifiah',
            'email' => 'Alifiahmaharani123@gmail.com',
            'password' => bcrypt('Hapisganteng123'),
            'is_admin' => 1
        ]);



        // User::factory(3)->create();

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
