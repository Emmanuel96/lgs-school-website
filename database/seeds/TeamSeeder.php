<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            'staff_name' => 'Kay Garland',
            'staff_role' => 'Lead Designer',
            'Twitter_link' => '',
            'facebook_link' => '',
            'Linkedin_link' => '',
            'display_image' => '1.jpg',
        ]);

        DB::table('team')->insert([
            'staff_name' => 'Larry Parker',
            'staff_role' => 'Lead Marketer',
            'Twitter_link' => '',
            'facebook_link' => '',
            'Linkedin_link' => '',
            'display_image' => '',
        ]);

        DB::table('team')->insert([
            'staff_name' => 'Diana Pertersen',
            'staff_role' => 'Lead Developer',
            'Twitter_link' => '',
            'facebook_link' => '',
            'Linkedin_link' => '',
            'display_image' => '3.jpg',
        ]);

        DB::table('team')->insert([
            'staff_name' => 'Kay Garland',
            'staff_role' => 'Lead Designer',
            'Twitter_link' => '',
            'facebook_link' => '',
            'Linkedin_link' => '',
            'display_image' => '1.jpg',
        ]);

     
        DB::table('team')->insert([
            'staff_name' => 'Diana Pertersen',
            'staff_role' => 'Lead Developer',
            'Twitter_link' => '',
            'facebook_link' => '',
            'Linkedin_link' => '',
            'display_image' => '3.jpg',
        ]);

        DB::table('team')->insert([
            'staff_name' => 'Kay Garland',
            'staff_role' => 'Lead Designer',
            'Twitter_link' => '',
            'facebook_link' => '',
            'Linkedin_link' => '',
            'display_image' => '1.jpg',
        ]);

      

        
    }
}