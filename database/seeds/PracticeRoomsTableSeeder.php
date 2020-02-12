<?php

use Illuminate\Database\Seeder;

class PracticeRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $practicerooms = [
        	['practicerooms_name' => 'PM01', 'practicerooms_computer_numbers' => 40],
        	['practicerooms_name' => 'PM02', 'practicerooms_computer_numbers' => 45],
        	['practicerooms_name' => 'PM03', 'practicerooms_computer_numbers' => 50],
        	['practicerooms_name' => 'PM04', 'practicerooms_computer_numbers' => 55],
        	['practicerooms_name' => 'PM05', 'practicerooms_computer_numbers' => 60],
        	['practicerooms_name' => 'PM06', 'practicerooms_computer_numbers' => 65],
        	['practicerooms_name' => 'PM07', 'practicerooms_computer_numbers' => 70],
        	['practicerooms_name' => 'PM08', 'practicerooms_computer_numbers' => 75],
        	['practicerooms_name' => 'PM09', 'practicerooms_computer_numbers' => 80],
        	['practicerooms_name' => 'PM010', 'practicerooms_computer_numbers' => 85],
        ];
        DB::table('practicerooms')->insert($practicerooms);
    }
}
