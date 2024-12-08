<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseRecommendationController extends Controller
{
    public function submitRecommendation(Request $request)
    {
        // Validasi data input
        $data = $request->validate([
            'umur' => 'required|numeric|min:10|max:80',
            'tingkat_kebugaran' => 'required',
            'tujuan_latihan' => 'required',
            'jenis_kelamin' => 'required',
            'waktu_latihan' => 'required'
        ]);

        $latihan = [
            'push up',
            'sit up',
            'squad',
            'lunges',
            'climber',
            'kardio',
            'tricep dips',
            'tricep ekstension',
            'plank',
            'leg raises',
            'Mountain Climbers',
            'Burpees',
            'Jump Squats',
            'Wall Sit',
            'Russian Twist',
            'Superman Exercise',
            'Bird Dog',
            'High Knees',
            'Diamond Push-ups'
        ];

        $selectedExercises = [];

        // Pemilihan berdasarkan tujuan latihan
        switch ($data['tujuan_latihan']) {
            case 'massaOtot':
                $selectedExercises = [
                    'push up',
                    'squad',
                    'tricep dips',
                    'Diamond Push-ups',
                    'Superman Exercise'
                ];
                break;

            case 'beratBadan':
                $selectedExercises = [
                    'Mountain Climbers',
                    'Burpees',
                    'Jump Squats',
                    'High Knees',
                    'Russian Twist'
                ];
                break;

            case 'ototBeratBadan':
                $selectedExercises = [
                    'push up',
                    'Mountain Climbers',
                    'squad',
                    'Russian Twist',
                    'Burpees'
                ];
                break;

            default:
                $selectedExercises = $latihan;
        }

        // Filter berdasarkan umur
        $umur = intval($data['umur']);
        if ($umur < 25) {
            $selectedExercises = array_merge($selectedExercises, ['Burpees', 'Jump Squats']);
        } elseif ($umur > 50) {
            $selectedExercises = array_filter($selectedExercises, function ($exercise) {
                return !in_array($exercise, ['Burpees', 'Jump Squats', 'High Knees']);
            });
            $selectedExercises[] = 'Wall Sit';
            $selectedExercises[] = 'Bird Dog';
        }

        // Filter berdasarkan tingkat kebugaran
        switch ($data['tingkat_kebugaran']) {
            case 'rendahKebugaran':
                $selectedExercises = array_slice($selectedExercises, 0, 3);
                break;

            case 'sedangKebugaran':
                $selectedExercises = array_slice($selectedExercises, 0, 5);
                break;

            case 'baikKebugaran':
                // Tetap menggunakan semua latihan yang dipilih
                break;
        }

        // Filter berdasarkan waktu latihan
        switch ($data['waktu_latihan']) {
            case 'singkat':
                $selectedExercises = array_slice($selectedExercises, 0, 2);
                break;

            case 'sedang':
                $selectedExercises = array_slice($selectedExercises, 0, 4);
                break;

            case 'panjang':
                // Tetap menggunakan semua latihan yang dipilih
                break;
        }

        // Tambahkan filter berdasarkan jenis kelamin (opsional)
        if ($data['jenis_kelamin'] == 'wanita') {
            $selectedExercises = array_merge($selectedExercises, ['Bird Dog', 'Wall Sit']);
        }

        // Pastikan tidak ada duplikat
        $selectedExercises = array_unique($selectedExercises);

        return response()->json([
            'success' => true,
            'rekomendasi' => $selectedExercises
        ]);
    }
}
