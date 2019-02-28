<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header')->insert([
            'welcome_text' => 'Welcome To Our Studio!',
            'intro_text' => 'Welcome To Our Studio!',
            'button_text' => 'tell me more',
        ]);
    }
}
