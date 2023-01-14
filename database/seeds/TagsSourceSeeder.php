<?php

use Illuminate\Database\Seeder;

class TagsSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->insert(['tag' => 'perros','post_id' => '1']);
      DB::table('tags')->insert(['tag' => 'razas de perros','post_id' => '1']);
      DB::table('tags')->insert(['tag' => 'vimifos','post_id' => '1']);
      DB::table('tags')->insert(['tag' => 'alimento','post_id' => '1']);
      DB::table('tags')->insert(['tag' => 'mascotas','post_id' => '2']);
      DB::table('tags')->insert(['tag' => 'gatos','post_id' => '2']);
      DB::table('tags')->insert(['tag' => 'pruebas','post_id' => '2']);
      DB::table('tags')->insert(['tag' => 'mascotas','post_id' => '5']);
      DB::table('tags')->insert(['tag' => 'alimento','post_id' => '5']);
      DB::table('tags')->insert(['tag' => 'prueba','post_id' => '5']);
      DB::table('tags')->insert(['tag' => 'mas pruebas','post_id' => '5']);
      DB::table('fuentes')->insert(['link' => 'https://www.vimifos.com','post_id' => '1']);
      DB::table('fuentes')->insert(['link' => 'https://www.iridizen.com','post_id' => '1']);
      DB::table('fuentes')->insert(['link' => 'https://www.colabora.mx','post_id' => '1']);
      DB::table('fuentes')->insert(['link' => 'https://laravel.com','post_id' => '1']);
      DB::table('fuentes')->insert(['link' => 'https://www.iridizen.com','post_id' => '3']);
      DB::table('fuentes')->insert(['link' => 'https://www.colabora.mx','post_id' => '3']);
      DB::table('fuentes')->insert(['link' => 'https://www.vimifos.com','post_id' => '3']);
      DB::table('fuentes')->insert(['link' => 'https://www.vimifos.com','post_id' => '5']);
      DB::table('fuentes')->insert(['link' => 'https://www.iridizen.com','post_id' => '5']);
    }
}
