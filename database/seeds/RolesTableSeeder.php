<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roles = [
            'super-admin' => 10,
            'admin' => 8 ,
            'moderator' => 6,
            'editor' => 4,
            'member' => 2,
            'designer' => 1,
        ];

        foreach ($roles as $role => $level)
        {
            $newRole = new Role();
            $newRole->name = $role;
            $newRole->level = $level;
            $newRole->save();
        }
    }
}
