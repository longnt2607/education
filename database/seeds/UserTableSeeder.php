<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'student',
                'username' => 'user1',
                'email' => 'user1@gmail.com',
                'phone' => '0123456789',
                'class' => 'cntt1',
                'password' => Hash::make('12345678'),
                'role' => '2',
            ],
            [
                'name' => 'teacher',
                'username' => 'user2',
                'email' => 'user2@gmail.com',
                'phone' => '0123456789',
                'class' => 'cntt1',
                'password' => Hash::make('12345678'),
                'role' => '1',
            ],
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0123456788',
                'class' => 'cntt1',
                'password' => Hash::make('12345678'),
                'role' => '0',
            ],
        ];
        DB::table('users')->insert($data);
    }
}
