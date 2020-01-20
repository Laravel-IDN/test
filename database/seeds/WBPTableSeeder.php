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
                'alamat' => $faker->address,
                'perkara' => $faker->randomElement(['pencurian', 'pembunuhan', 'narkoba']),
                'jenis_kejahatan' => $faker->randomElement(['pencurian', 'pembunuhan', 'narkoba']),
                'vonis' => $faker->numberBetween(1, 5).' Tahun',
                'foto' => $faker->imageUrl(),
            ]);
        }
    }
}
