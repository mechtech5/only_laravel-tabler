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
      \App\User::create([
      	'name' => 'Ayush Likhar',
      	'handle' => 'alikhar',
      	'email' => 'alikhar@laxyo.in',
      	'password' => bcrypt('123456')
      ]);
    }
}
