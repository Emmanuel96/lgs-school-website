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
            'video_name' => 'ROAR',
            'youtube_url' => 'https://youtu.be/8OERJQ4ssoU',
            'video_description' => 'Watch how these kids make a beautiful cover to Roar by Katy Perry with an Africanized beat...',
            'video' => '',
            'display_image' => '01-thumbnail.jpg',
            'image_description' => 'Illustration',
        ]);

        DB::table('youtube')->insert([
            'video_name' => 'LGS WEEKLY NEWS',
            'youtube_url' => 'https://www.youtube.com/watch?v=OAG-g3TYye4',
            'video_description' => 'Watch these kids make a beautiful cover to Pharrell Williams Song (Happy)...',
            'video' => '',
            'display_image' => '02-thumbnail.jpg',
            'image_description' => 'Graphic Design',
        ]);

        DB::table('youtube')->insert([
            'video_name' => 'NOT TO BE BOXED',
            'youtube_url' => 'https://www.youtube.com/watch?v=HaGVVX77ehA',
            'video_description' =>'Education is essential and should not be put in a box',
            'video' => '',
            'display_image' => '03-thumbnail.jpg',
            'image_description' => 'Identity',
        ]);

        DB::table('youtube')->insert([
            'video_name' => 'HAPPY',
            'youtube_url' => 'https://www.youtube.com/watch?v=qdyp6Y_V1u8',
            'video_description' => 'Watch these kids make a beautiful cover to Pharrell Williams Song (Happy)...',
            'video' => '',
            'display_image' => '04-thumbnail.jpg',
            'image_description' => 'Branding',
        ]);

        DB::table('youtube')->insert([
            'video_name' => 'LGS TALK ROOM',
            'youtube_url' => 'https://www.youtube.com/watch?v=4c4AFx8bVSw',
            'video_description' => 'Watch these kids make a beautiful cover to Pharrell Williams Song (Happy)...',
            'video' => '',
            'display_image' => '05-thumbnail.jpg',
            'image_description' => 'Website Design',
        ]);

      

        
    }
}