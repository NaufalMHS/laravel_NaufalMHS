<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rumah_sakits')->insert([
            [
                'nama_rumah_sakit' => 'RS ABC',
                'alamat' => 'Jalan Merdeka No. 1, Bandung',
                'email' => 'rsabc@example.com',
                'telepon' => '022-1234567',
            ],
            [
                'nama_rumah_sakit' => 'RS XYZ',
                'alamat' => 'Jalan Sudirman No. 5, Jakarta',
                'email' => 'rsxyz@example.com',
                'telepon' => '021-6543210',
            ],
        ]);
    }
}
