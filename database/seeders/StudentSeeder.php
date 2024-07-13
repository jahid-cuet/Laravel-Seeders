<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students=collect(
            [

            ['name'=>'jahid Hasan',
            'email'=>'jahid@gmail.com'
             ],
            ['name'=>'Shahid Hasan',
            'email'=>'shahid@gmail.com'
             ],
            ['name'=>'rahid Hasan',
            'email'=>'rahid@gmail.com'
             ],  
    ]
            );

            $students->each(function($student){
                Student::insert($student);
            });
        // Student::create([
        //     'name'=>'jahid Hasan',
        //     'email'=>'jahid@gmail.com',

        // ]);
    }
}
