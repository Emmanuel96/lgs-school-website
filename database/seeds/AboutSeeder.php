<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('about')->insert([
            'year_range' => '2009-2011',
            'year_heading' => 'Our Humble Beginnings',
            'year_description' => 'Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, 
            totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, 
            sed, incidunt et ea quo dolore laudantium consectetur!',
            'display_image' => '1.jpg'
        ]);

        DB::table('about')->insert([
            'year_range' => 'March 2011',
            'year_heading' => 'An School is Born',
            'year_description' => 'Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit. Sunt ut voluptatum eius sapiente,
             totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, 
             sed, incidunt et ea quo dolore laudantium consectetur!',
            'display_image' => '2.jpg'
        ]);

        DB::table('about')->insert([
            'year_range' => 'December 2012',
            'year_heading' => 'Transition to Full Service',
            'year_description' => 'Lorem ipsum dolor sit amet,
             consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, 
             totam reiciendis temporibus qui quibusdam,
             recusandae sit vero unde, 
             sed, incidunt et ea quo dolore laudantium consectetur!',
            'display_image' => '3.jpg'
        ]);

        DB::table('about')->insert([
            'year_range' => 'July 2014',
            'year_heading' => 'Creation of Addo Branch',
            'year_description' => 'Lorem ipsum dolor sit amet,
             consectetur adipisicing elit. Sunt ut voluptatum eius sapiente,
              totam reiciendis temporibus qui quibusdam, recusandae sit vero unde,
               sed, incidunt et ea quo dolore laudantium consectetur!',
            'display_image' => '4.jpg'
        ]);

       
    }
}