<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
        	['name' => 'Hoang Quang Huy', 'email' => 'huyhq@gmail.com', 'password' => Hash::make('12345')],
        	['name' => 'Nguyen Van Quoc Khanh', 'email' => 'khanhnvq@gmail.com', 'password' => Hash::make('12345')],
        	['name' => 'Tran Thi Giang', 'email' => 'giangtt@gmail.com', 'password' => Hash::make('12345')],
        	['name' => 'Phan Thi Ngoc', 'email' => 'ngocpt@gmail.com', 'password' => Hash::make('12345')],
        ];
        DB::table('users')->insert($users);
    }
}
