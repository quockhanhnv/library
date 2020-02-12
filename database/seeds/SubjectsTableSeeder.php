<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
        	['subjects_name' => 'Kỹ Thuật Lập Trình', 'subjects_credits' => 3, 'subjects_major_id' => 1,'subjects_created_by' => 1, 'subjects_updated_by' => 1],
        	['subjects_name' => 'Lập Trình Hướng Đối Tượng', 'subjects_credits' => 4, 'subjects_major_id' => 1, 'subjects_created_by' => 1, 'subjects_updated_by' => 1],
        	['subjects_name' => 'Lập Trình Cơ Bản', 'subjects_credits' => 3, 'subjects_major_id' => 1, 'subjects_created_by' => 1, 'subjects_updated_by' => 1],
        ];
        DB::table('subjects')->insert($subjects);
    }
}
