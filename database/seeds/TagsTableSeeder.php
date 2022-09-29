<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = [
            'Photo',
            'Video',
            'Arte',
            'Moda',
            'Sport',
        ];

        foreach ($tags as $tag)
        {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
