<?php

namespace Database\Seeders;

use App\Models\Alternatif;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternatif = [
            [
                'code' => 'A1',
                'name' => 'A1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A2',
                'name' => 'A2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A3',
                'name' => 'A3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A4',
                'name' => 'A4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A5',
                'name' => 'A5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A6',
                'name' => 'A6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A7',
                'name' => 'A7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A8',
                'name' => 'A8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A9',
                'name' => 'A9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A10',
                'name' => 'A10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A11',
                'name' => 'A11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A12',
                'name' => 'A12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A13',
                'name' => 'A13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A14',
                'name' => 'A14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A15',
                'name' => 'A15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A16',
                'name' => 'A16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A17',
                'name' => 'A17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A18',
                'name' => 'A18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A19',
                'name' => 'A19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A20',
                'name' => 'A20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Alternatif::insert($alternatif);
    }
}
