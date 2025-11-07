<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students= collect([
                ['name'=>'Khubaib',
            'address'=>'Islamabad',
            'contact'=>'323424'],
                ['name'=>'Karamat',
            'address'=>'Karachi',
            'contact'=>'8324832'],
                ['name'=>'Ahsan',
            'address'=>'Lahore',
            'contact'=>'32883274']
            ]);

            $students->each(function($student){

                 Student::insert($student);
            });

    }
}
