<?php

namespace Database\Seeders;

use App\Models\JenisLaporan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jenis_laporan' => 'LI'],
            ['jenis_laporan' => 'LK'],
            ['jenis_laporan' => 'Kirka']
        ];

        JenisLaporan::insert($data);
    }
}
