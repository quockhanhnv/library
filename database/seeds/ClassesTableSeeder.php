<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
    		['classes_name' => 'Kỹ thuật phần mềm 1', 'classes_student_numbers' => 70, 'classes_course' => 10, 'classes_active' => 1],
    		['classes_name' => 'Kỹ thuật phần mềm 2', 'classes_student_numbers' => 75, 'classes_course' => 10, 'classes_active' => 1],
    		['classes_name' => 'Kỹ thuật phần mềm 3', 'classes_student_numbers' => 80, 'classes_course' => 10, 'classes_active' => 1],
    		['classes_name' => 'Kỹ thuật phần mềm 4', 'classes_student_numbers' => 65, 'classes_course' => 10, 'classes_active' => 1],
    		['classes_name' => 'Kỹ thuật phần mềm 5', 'classes_student_numbers' => 60, 'classes_course' => 10, 'classes_active' => 1],
    		['classes_name' => 'Kỹ thuật phần mềm 6', 'classes_student_numbers' => 70, 'classes_course' => 10, 'classes_active' => 1],
    	];
        DB::table('classes')->insert($classes);
    }
}
