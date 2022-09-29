<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $names = ['html','css', 'php', 'python', 'JavaScript'];

    public function run(Faker $faker)
    {
        foreach ($this->names as $key => $name) {
            $newCategory = new Category();
            $newCategory->name = $name;
            $newCategory->color =$faker->hexColor();
            $newCategory->save();
        }
    }
}
