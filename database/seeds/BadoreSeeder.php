<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('badore')->insert([
            'Campus_name2' => 'Badore Campus',
            'Campus_description2' => 'Lorem ipsum dolor sit amet,
             consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
            'Campus_image2' => 'campus2.jpg',
        ]);

      

        
    }
}