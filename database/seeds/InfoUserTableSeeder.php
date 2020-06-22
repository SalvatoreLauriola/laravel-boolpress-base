<?php

use Illuminate\Database\Seeder;
use App\InfoUser;
use App\User;
use Faker\Generator as Faker;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $newInfo = new InfoUser();
            //User id verrà preso dalla tabella User che ci siamo importati
            $newInfo->user_id = $user->id;
            $newInfo->phone = $faker->phoneNumber();
            $newInfo->avatar = $faker->imageUrl(640, 480);
            $newInfo->state = $faker->state();

            $newInfo->save();
        }
    }
}
