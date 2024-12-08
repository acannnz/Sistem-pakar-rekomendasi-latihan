<?php

namespace Database\Seeders;

use App\Models\latihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisLatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'jenis' => 'Push Up',
            ],
            [
                'jenis' => 'Sit Up',
            ],
            [
                'jenis' => 'Squad',
            ],
            [
                'jenis' => 'Lunges',
            ],
            [
                'jenis' => 'Climber',
            ],
            [
                'jenis' => 'Kardio',
            ],
            [
                'jenis' => 'Tricep Dips',
            ],
            [
                'jenis' => 'Tricep Ekstension',
            ],
            [
                'jenis' => 'Plank',
            ],
            [
                'jenis' => 'Leg Raises',
            ],
            [
                'jenis' => 'Mountain Climbers',
            ],
            [
                'jenis' => 'Burpees',
            ],
            [
                'jenis' => 'Jump Squats',
            ],
            [
                'jenis' => 'Wall Sit',
            ],
            [
                'jenis' => 'Russian Twist',
            ],
            [
                'jenis' => 'Superman Exercise',
            ],
            [
                'jenis' => 'Bird Dog',
            ],
            [
                'jenis' => 'High Knees',
            ],
            [
                'jenis' => 'Diamond Push-ups',
            ],
        ];

        foreach ($data as $key => $val) {
            latihan::create($val);
        }
    }
}
