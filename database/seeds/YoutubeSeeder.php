<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtube')->insert([
            'Video_name' => 'ROAR',
            'Youtube_url' => 'https://youtu.be/8OERJQ4ssoU',
            'video_description' => 'Watch how these kids make a beautiful cover to Roar by Katy Perry with an Africanized beat...',
            'video' => '',
        ]);

        DB::table('youtube')->insert([
            'Video_name' => 'LGS WEEKLY NEWS',
            'Youtube_url' => 'https://www.youtube.com/watch?v=OAG-g3TYye4',
            'video_description' => 'Watch these kids make a beautiful cover to Pharrell Williams Song (Happy)...',
            'video' => '',
        ]);

        DB::table('youtube')->insert([
            'Video_name' => 'NOT TO BE BOXED',
            'Youtube_url' => 'https://www.youtube.com/watch?v=HaGVVX77ehA',
            'video_description' =>'Education is essential and should not be put in a box',
            'video' => '',
        ]);

        DB::table('youtube')->insert([
            'Video_name' => 'HAPPY',
            'Youtube_url' => 'https://www.youtube.com/watch?v=qdyp6Y_V1u8',
            'video_description' => 'Watch these kids make a beautiful cover to Pharrell Williams Song (Happy)...',
            'video' => '',
        ]);

        DB::table('youtube')->insert([
            'Video_name' => 'LGS TALK ROOM',
            'Youtube_url' => 'https://www.youtube.com/watch?v=4c4AFx8bVSw',
            'video_description' => 'Watch these kids make a beautiful cover to Pharrell Williams Song (Happy)...',
            'video' => '',
        ]);

      

        
    }
}