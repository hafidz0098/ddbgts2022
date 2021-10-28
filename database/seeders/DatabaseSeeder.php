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
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Annab',
        //     'email' => 'annab123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

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
        

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus facere deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum dolore explicabo optio velit consequuntur animi, suscipit eum molestias dolor impedit maxime, eveniet alias fugit. Iusto, eveniet. Neque nulla eveniet illum eius voluptate aliquam exercitationem asperiores repellendus, recusandae modi maiores. Excepturi, nam cumque eum repudiandae iste in eligendi praesentium amet ab ducimus itaque placeat reiciendis odio vitae nulla consequuntur natus voluptatum! Facilis ullam nemo doloribus deleniti architecto in dolorum iste maxime nesciunt repellendus eius corrupti quibusdam aliquam saepe, voluptatibus itaque ratione ut tempore. Illum quis velit nulla. Aspernatur, facilis libero eveniet deleniti optio aliquid reprehenderit assumenda. Beatae omnis voluptas, enim nobis aliquid repellendus culpa. A accusamus cumque, voluptatem assumenda tempora perferendis, dolorem iste cupiditate quam iure cum! Tempore est neque ipsa.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus facere deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum dolore explicabo optio velit consequuntur animi, suscipit eum molestias dolor impedit maxime, eveniet alias fugit. Iusto, eveniet. Neque nulla eveniet illum eius voluptate aliquam exercitationem asperiores repellendus, recusandae modi maiores. Excepturi, nam cumque eum repudiandae iste in eligendi praesentium amet ab ducimus itaque placeat reiciendis odio vitae nulla consequuntur natus voluptatum! Facilis ullam nemo doloribus deleniti architecto in dolorum iste maxime nesciunt repellendus eius corrupti quibusdam aliquam saepe, voluptatibus itaque ratione ut tempore. Illum quis velit nulla. Aspernatur, facilis libero eveniet deleniti optio aliquid reprehenderit assumenda. Beatae omnis voluptas, enim nobis aliquid repellendus culpa. A accusamus cumque, voluptatem assumenda tempora perferendis, dolorem iste cupiditate quam iure cum! Tempore est neque ipsa.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus facere deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum dolore explicabo optio velit consequuntur animi, suscipit eum molestias dolor impedit maxime, eveniet alias fugit. Iusto, eveniet. Neque nulla eveniet illum eius voluptate aliquam exercitationem asperiores repellendus, recusandae modi maiores. Excepturi, nam cumque eum repudiandae iste in eligendi praesentium amet ab ducimus itaque placeat reiciendis odio vitae nulla consequuntur natus voluptatum! Facilis ullam nemo doloribus deleniti architecto in dolorum iste maxime nesciunt repellendus eius corrupti quibusdam aliquam saepe, voluptatibus itaque ratione ut tempore. Illum quis velit nulla. Aspernatur, facilis libero eveniet deleniti optio aliquid reprehenderit assumenda. Beatae omnis voluptas, enim nobis aliquid repellendus culpa. A accusamus cumque, voluptatem assumenda tempora perferendis, dolorem iste cupiditate quam iure cum! Tempore est neque ipsa.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus facere deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum dolore explicabo optio velit consequuntur animi, suscipit eum molestias dolor impedit maxime, eveniet alias fugit. Iusto, eveniet. Neque nulla eveniet illum eius voluptate aliquam exercitationem asperiores repellendus, recusandae modi maiores. Excepturi, nam cumque eum repudiandae iste in eligendi praesentium amet ab ducimus itaque placeat reiciendis odio vitae nulla consequuntur natus voluptatum! Facilis ullam nemo doloribus deleniti architecto in dolorum iste maxime nesciunt repellendus eius corrupti quibusdam aliquam saepe, voluptatibus itaque ratione ut tempore. Illum quis velit nulla. Aspernatur, facilis libero eveniet deleniti optio aliquid reprehenderit assumenda. Beatae omnis voluptas, enim nobis aliquid repellendus culpa. A accusamus cumque, voluptatem assumenda tempora perferendis, dolorem iste cupiditate quam iure cum! Tempore est neque ipsa.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
