<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for($i=0; $i<30; $i++){
            $new_user = DB::table('users')->insertGetId([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);

            $user = User::find($new_user);
            $user->attachRole('admin');
        }
    }
}
