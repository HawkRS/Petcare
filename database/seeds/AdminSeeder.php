<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'John Lennon',
        'email' => 'admin@mail.com',
        'password' => bcrypt('123456'),
      ]);
    }
}
