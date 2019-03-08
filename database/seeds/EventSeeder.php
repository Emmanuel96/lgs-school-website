<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
            'EventName' => 'Valentines Day',
            'Display_image' => '01-thumbnail.jpg',
            'EventDescription' => 'Illustration',
        ]);

        DB::table('event')->insert([
            'EventName' => 'Numeracy Day',
            'Display_image' => '02-thumbnail.jpg',
            'EventDescription' => 'Get The Maths Right.',
        ]);

        DB::table('event')->insert([
            'EventName' => 'International Day',
            'Display_image' => '03-thumbnail.jpg',
            'EventDescription' => 'Celebrate The World.',
        ]);

        
        DB::table('event')->insert([
            'EventName' => 'Graduation 2018',
            'Display_image' => '04-thumbnail.jpg',
            'EventDescription' => 'Our Children.Our Pride.',
        ]);

        DB::table('event')->insert([
            'EventName' => 'Inter House Sports',
            'Display_image' => '05-thumbnail.jpg',
            'EventDescription' => 'Sports is growth.',
        ]);

        DB::table('event')->insert([
            'EventName' => 'Graduation 2017',
            'Display_image' => '06-thumbnail.jpg',
            'EventDescription' => 'Our Children.Our Pride.',
        ]);

      

        
    }
}