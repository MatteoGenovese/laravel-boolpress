<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            RolesUserTableSeeder::class,
            CategoriesTableSeeder::class,
            PostsTableSeeder::class,
            TagsTableSeeder::class,
            PostsTagsTableSeeder::class,
        ]);
    }
}
