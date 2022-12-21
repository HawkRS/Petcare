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
        'name' => 'Carlos Gonzalez',
        'email' => 'sudo@mail.com',
        'password' => bcrypt('*Raikkonen1'),
        'type' => 0,
      ]);
      DB::table('users')->insert([
        'name' => 'Admin Vimifos',
        'email' => 'admin@mail.com',
        'password' => bcrypt('P3tc4R3'),
        'type' => 1,
      ]);
    }
}
