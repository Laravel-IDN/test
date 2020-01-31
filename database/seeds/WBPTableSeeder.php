<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\WBP;

class WBPTableSeeder extends Seeder
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
            $new_user = DB::table('wbp')->insertGetId([
                'kode_wbp' => 'WBP'.$faker->numberBetween(000,999),
                'nama' => $faker->firstNameFemale.' '.$faker->firstNameFemale,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d'),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Buddha']),
                'perkara' => $faker->randomElement(['Pembunuhan', 'Pencurian', 'Pencurian', 'Korupsi']),
                'jenis_kejahatan' => $faker->randomElement(['PidSus', 'PiDum']),
                'vonis' => ''.$faker->numberBetween(1, 10).' Tahun',
                'tgl_berperkara' => $faker->date('Y-m-d'),
                'foto' => $faker->imageUrl(),
            ]);
        }
    }
}
