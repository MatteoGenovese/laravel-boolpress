<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        //richiamo tutti i posts e tutti i tags
        $posts = Post::all();
        $tags = Tag::all();

        foreach($posts as $post){

            //prendo 3 tag random
            $randomTags = $faker->randomElements($tags, 3, false);

            foreach ($randomTags as $randomTag) {
                //inserisco ciascun tag per post, tranne i duplicati
                $post->tags()->attach($randomTag->id);
            }
        }

    }
}

