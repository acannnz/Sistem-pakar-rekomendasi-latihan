<?php

namespace Database\Seeders;

use App\Models\latihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisLatihanSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
                'jenis' => 'Push Up',
                'deskripsi' => 'Push-up adalah latihan kekuatan yang melibatkan tubuh bagian atas, terutama dada, bahu, dan tricep. Latihan ini sangat efektif untuk meningkatkan kekuatan otot bagian atas.',
                'gambar' => 'image/pushup.jpg',
                'set' => '3 set x 10 reps',
            ],
            [
                'jenis' => 'Sit Up',
                'deskripsi' => 'Sit-up adalah latihan yang berfokus pada penguatan otot perut, khususnya otot rectus abdominis. Latihan ini membantu memperbaiki kekuatan inti tubuh.',
                'gambar' => 'image/situp.jpg',
                'set' => '3 set x 15 reps',
            ],
            [
                'jenis' => 'Squat',
                'deskripsi' => 'Squat adalah latihan untuk memperkuat otot kaki, terutama paha, bokong, dan betis. Ini juga melibatkan otot inti tubuh.',
                'gambar' => 'image/squad.jpg',
                'set' => '3 set x 12 reps',
            ],
            [
                'jenis' => 'Lunges',
                'deskripsi' => 'Lunges adalah latihan yang melibatkan gerakan langkah ke depan untuk melatih otot kaki, bokong, dan inti. Ini juga meningkatkan keseimbangan dan fleksibilitas.',
                'gambar' => 'image/lunges.jpg',
                'set' => '3 set x 10 reps (per kaki)',
            ],
            [
                'jenis' => 'Climber',
                'deskripsi' => 'Mountain climbers adalah latihan kardio yang melibatkan gerakan seperti mendaki gunung. Ini melatih otot inti, kaki, dan meningkatkan denyut jantung.',
                'gambar' => 'image/climber.jpg',
                'set' => '3 set x 20 detik',
            ],
            [
                'jenis' => 'Kardio',
                'deskripsi' => 'Latihan kardio melibatkan aktivitas yang meningkatkan detak jantung, seperti berlari, bersepeda, atau berenang, untuk meningkatkan kesehatan jantung dan stamina.',
                'gambar' => 'image/kardio.jpg',
                'set' => '5 set x 1 menit',
            ],
            [
                'jenis' => 'Tricep Dips',
                'deskripsi' => 'Tricep dips adalah latihan untuk melatih otot triceps di lengan bagian belakang dengan cara menurunkan tubuh menggunakan tangan sebagai penopang.',
                'gambar' => 'image/tricepdips.jpg',
                'set' => '3 set x 8 reps',
            ],
            [
                'jenis' => 'Tricep Ekstension',
                'deskripsi' => 'Tricep extension adalah latihan untuk melatih otot triceps dengan cara menarik beban ke atas atau ke belakang untuk memperpanjang lengan.',
                'gambar' => 'image/tricepekstension.jpg',
                'set' => '3 set x 10 reps',
            ],
            [
                'jenis' => 'Plank',
                'deskripsi' => 'Plank adalah latihan inti yang memperkuat otot perut, punggung bawah, dan bahu dengan mempertahankan posisi tubuh seperti push-up.',
                'gambar' => 'image/plank.jpg',
                'set' => '3 set x 30 detik',
            ],
            [
                'jenis' => 'Leg Raises',
                'deskripsi' => 'Leg raises adalah latihan yang berfokus pada penguatan otot perut bagian bawah dengan mengangkat kaki secara perlahan.',
                'gambar' => 'image/legraise.jpg',
                'set' => '3 set x 12 reps',
            ],
            [
                'jenis' => 'Mountain Climbers',
                'deskripsi' => 'Mountain climbers adalah latihan yang melibatkan gerakan mendaki cepat, efektif untuk membakar kalori dan melatih otot inti.',
                'gambar' => 'image/mountainclimbers.jpg',
                'set' => '3 set x 15 detik',
            ],
            [
                'jenis' => 'Burpees',
                'deskripsi' => 'Burpees adalah latihan full-body yang melibatkan squat, push-up, dan lompat untuk meningkatkan kekuatan dan ketahanan.',
                'gambar' => 'image/burpees.jpg',
                'set' => '3 set x 8 reps',
            ],
            [
                'jenis' => 'Jump Squats',
                'deskripsi' => 'Jump squats adalah variasi squat yang melibatkan lompatan, membantu meningkatkan kekuatan kaki dan daya ledak.',
                'gambar' => 'image/jumpsquad.jpg',
                'set' => '3 set x 10 reps',
            ],
            [
                'jenis' => 'Wall Sit',
                'deskripsi' => 'Wall sit adalah latihan statis yang melibatkan posisi duduk di dinding untuk menguatkan otot paha dan bokong.',
                'gambar' => 'image/wallsit.jpg',
                'set' => '3 set x 30 detik',
            ],
            [
                'jenis' => 'Russian Twist',
                'deskripsi' => 'Russian twist adalah latihan yang melatih otot perut bagian samping dengan gerakan rotasi tubuh sambil duduk.',
                'gambar' => 'image/russiantwist.jpg',
                'set' => '3 set x 15 reps (per sisi)',
            ],
            [
                'jenis' => 'Superman Exercise',
                'deskripsi' => 'Superman exercise adalah latihan punggung bawah yang melibatkan angkatan tubuh bagian atas dan kaki untuk memperkuat punggung.',
                'gambar' => 'image/supermanexersise.jpg',
                'set' => '3 set x 12 reps',
            ],
            [
                'jenis' => 'Bird Dog',
                'deskripsi' => 'Bird dog adalah latihan inti yang melibatkan gerakan merentangkan kaki dan tangan secara bergantian untuk meningkatkan keseimbangan.',
                'gambar' => 'image/birddog.jpg',
                'set' => '3 set x 10 reps (per sisi)',
            ],
            [
                'jenis' => 'High Knees',
                'deskripsi' => 'High knees adalah latihan kardio yang melibatkan mengangkat lutut setinggi mungkin untuk meningkatkan detak jantung dan melatih kaki.',
                'gambar' => 'image/highknees.jpg',
                'set' => '3 set x 20 detik',
            ],
            [
                'jenis' => 'Diamond Push-ups',
                'deskripsi' => 'Diamond push-up adalah variasi push-up dengan posisi tangan membentuk bentuk berlian, yang lebih menekankan pada triceps dan dada bagian dalam.',
                'gambar' => 'image/diamondpushup.jpg',
                'set' => '3 set x 8 reps',
            ],
        ];


        foreach ($data as $key => $val) {
            latihan::create($val);
        }
    }
}
