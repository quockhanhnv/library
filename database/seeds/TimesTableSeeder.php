<?php

use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$times = [
            ['times_name' => 'Sáng'],
            ['times_name' => 'Chiều'],
            ['times_name' => 'Tối'],
    	];
        DB::table('times')->insert($times);
    }
}
