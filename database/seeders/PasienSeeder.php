<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasiens')->insert([
            [
                'nama_pasien' => 'John Doe',
                'alamat' => 'Jalan Kebon Sirih No. 10, Bandung',
                'no_telpon' => '08123456789',
                'rumah_sakit_id' => 1,  // RS ABC
            ],
            [
                'nama_pasien' => 'Jane Smith',
                'alamat' => 'Jalan Thamrin No. 20, Jakarta',
                'no_telpon' => '08129876543',
                'rumah_sakit_id' => 2,  // RS XYZ
            ],
        ]);
    }
}
