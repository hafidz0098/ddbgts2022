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
