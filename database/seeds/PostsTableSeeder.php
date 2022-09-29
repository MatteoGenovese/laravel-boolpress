<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        $users= User::all();
        $categories = Category::all();

        for ($i=0; $i < 100; $i++) {
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->category_id = $faker->randomElement($categories)->id;
            $newPost->title = $faker->realText(35);
            // $newPost->author = $newPost->user->name;
            $newPost->post_date = $faker->date('Y-m-d');
            $newPost->post_image = $faker->imageUrl();
            $newPost->post_content = $faker->paragraphs(5, true);
            $newPost->save();
        }
    }
}
