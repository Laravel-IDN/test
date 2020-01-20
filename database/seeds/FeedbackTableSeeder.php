<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $jadwal = \App\Jadwal::all();
        $jadwal = $jadwal->map(function ($user) {
                    return $user->day. ', ' .substr($user->start, 0, 5) . ' - ' . substr($user->end, 0, 5);
                });

        for($i=0; $i<30; $i++){
            $new_row = DB::table('feedback')->insertGetId([
                'kunjungan_id' => 'KS'.$faker->numberBetween(000,999),
                'waktu_kunjungan' => $faker->randomElement($jadwal),
                'rating' => $faker->randomElement([1,2,3,4,5]),
                'kritik' => $faker->paragraph(1),
                'saran' => $faker->paragraph(1),
            ]);
        }
    }
}
