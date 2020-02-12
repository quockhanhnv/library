<?php

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
        	['majors_name' => 'Kỹ Thuật Phần Mềm', 'majors_detail' => 'Chuyên ngành kỹ thuật phần mềm...', 'majors_active' => 1, 'majors_created_by' => 1, 'majors_updated_by' => 1],
        	['majors_name' => 'Khoa học máy tính', 'majors_detail' => 'Chuyên ngành khoa học máy tính...', 'majors_active' => 1, 'majors_created_by' => 1, 'majors_updated_by' => 1],
        	['majors_name' => 'Hệ thống thông tin', 'majors_detail' => 'Chuyên ngành hệ thống thông tin...', 'majors_active' => 1, 'majors_created_by' => 1, 'majors_updated_by' => 1],
        ];
        DB::table('majors')->insert($majors);
    }
}
