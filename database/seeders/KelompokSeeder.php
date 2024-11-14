<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelompok::create([
            'id' =>1,
            'nama_kelompok' =>'Pokja 1',
            'deskripsi' => 'Pokja 1',
        ]);
    }
}
