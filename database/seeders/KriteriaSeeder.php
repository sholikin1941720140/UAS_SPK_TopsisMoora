<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteria = [
            [
                'code' => 'C1',
                'name' => 'Usia',
                'type'=> 'benefit',
                'weight'=> 0.25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C2',
                'name' => 'Pendidikan',
                'type'=> 'benefit',
                'weight'=> 1.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C3',
                'name' => 'Jabatan',
                'type'=> 'benefit',
                'weight'=> 0.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C4',
                'name' => 'Pangkat / Golongan',
                'type'=> 'benefit',
                'weight'=> 0.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C5',
                'name' => 'Jumlah Simpanan Wajib',
                'type'=> 'benefit',
                'weight'=> 1.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C6',
                'name' => 'Jumlah Simpanan Sukarela',
                'type'=> 'benefit',
                'weight'=> 0.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C7',
                'name' => 'Jumlah Utang Unit',
                'type'=> 'cost',
                'weight'=> 1.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C8',
                'name' => 'Jumlah Utang Faktur',
                'type'=> 'benefit',
                'weight'=> 0.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C9',
                'name' => 'Sisa Angsuran Utang Unit',
                'type'=> 'benefit',
                'weight'=> 1.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'C10',
                'name' => 'Sisa Angsuran Utang Faktur',
                'type'=> 'cost',
                'weight'=> 0.75,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        Kriteria::insert($kriteria);
    }
}
