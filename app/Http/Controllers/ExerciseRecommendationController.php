<?php

namespace App\Http\Controllers;

use App\Models\latihan;
use Illuminate\Http\Request;

class ExerciseRecommendationController extends Controller
{
    public function index()
    {
        $selectedExercises = [];
        return view('index')->with('selectedExercises', $selectedExercises);
    }

    public function submitRecommendation(Request $request)
    {
        $data = $request->validate([
            'umur' => 'required|numeric|min:10|max:80',
            'tingkat_kebugaran' => 'required',
            'tujuan_latihan' => 'required',
            'jenis_kelamin' => 'required',
            'waktu_latihan' => 'required'
        ]);
        $latihan = Latihan::all()->pluck('jenis')->toArray();

        $selectedExercises = [];

        switch ($data['tujuan_latihan']) {
            case 'massaOtot':
                $selectedExercises = [
                    'Push Up',
                    'Squad',
                    'Tricep Dips',
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
                    'Push Up',
                    'Mountain Climbers',
                    'Squad',
                    'Tricep Dips',
                    'Russian Twist',
                    'Burpees'
                ];
                break;

            default:
                $selectedExercises = $latihan;
        }

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
                break;
        }
        switch ($data['waktu_latihan']) {
            case 'singkat':
                $selectedExercises = array_slice($selectedExercises, 0, 2);
                break;
            case 'sedang':
                $selectedExercises = array_slice($selectedExercises, 0, 4);
                break;
            case 'panjang':
                break;
        }

        // Tambahkan filter berdasarkan jenis kelamin (opsional)
        if ($data['jenis_kelamin'] == 'wanita') {
            $selectedExercises = array_merge($selectedExercises, ['Bird Dog', 'Wall Sit']);
        }

        // Pastikan tidak ada duplikat
        $selectedExercises = array_unique($selectedExercises);

        return response()->json([
            'selectedExercises' => $selectedExercises
        ]);
    }
}
