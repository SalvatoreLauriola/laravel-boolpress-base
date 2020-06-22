<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records = 10;
        for ($i=0; $i < $records ; $i++) { 
            $newRecord = new User();

            $newRecord->name = $faker->name();
            $newRecord->email = $faker-> email();
            $newRecord->address = $faker-> address();
            $newRecord->password = Hash::make('mypassword');

            $newRecord->save();
        }
    }
}
