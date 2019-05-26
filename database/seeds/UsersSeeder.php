<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'ahmed',
                'email' => 'ahmed@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('ahmed@gmail.com')
            ],
            [
                'name' => 'mohamed',
                'email' => 'mohamed@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('mohamed@gmail.com')
            ]
        ];
        DB::table('users')->delete();
        DB::table('users')->insert($users);
    }
}
