<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newUser = new User();
        $newUser->name = 'Geno';
        $newUser->email = 'matteo.genovese@icloud.com';
        $newUser->password = Hash::make('12345');
        $newUser->save();
        for ($i=0; $i < 10; $i++) {
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->unique()->email();
            $newUser->password =  Hash::make($faker->password());
            $newUser->save();
        }
    }
}
