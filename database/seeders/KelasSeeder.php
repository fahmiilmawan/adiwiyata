<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'nama_kelas' => 'X RPL 1',
            'deskripsi' => 'Kelas X RPL 1'
        ]);
        Kelas::create([
            'nama_kelas' => 'X RPL 2',
            'deskripsi' => 'Kelas X RPL 2'
        ]);
        Kelas::create([
            'nama_kelas' => 'X RPL 3',
            'deskripsi' => 'Kelas X RPL 3'
        ]);

    }
}
