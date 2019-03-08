<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addo')->insert([
            'Campus_name1' => 'Addo Campus',
            'Campus_description1' => 'Lorem ipsum dolor sit amet,
             consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
            'Campus_image1' => 'campus1.jpg',
        ]);
      

        
    }
}