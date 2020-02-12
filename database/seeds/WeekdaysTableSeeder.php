<?php

use Illuminate\Database\Seeder;

class WeekdaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$weekdays = [
    		['weekdays_name' => 'Thứ 2'],
    		['weekdays_name' => 'Thứ 3'],
    		['weekdays_name' => 'Thứ 4'],
    		['weekdays_name' => 'Thứ 5'],
    		['weekdays_name' => 'Thứ 6'],
    		['weekdays_name' => 'Thứ 7'],
    		['weekdays_name' => 'Chủ nhật'],
    	];
        DB::table('weekdays')->insert($weekdays);
    }
}
