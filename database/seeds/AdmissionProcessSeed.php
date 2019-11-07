<?php

use Illuminate\Database\Seeder;

class AdmissionProcessSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admission')->insert([
            'header' => 'Interested? ',
            'sub_header' => 'You can visit either our Badore or our Addo branch to pick up our application form',
            'admission_image' => '1.jpg',
        ]);

        DB::table('admission')->insert([
            'header' => 'Required Documents',
            'sub_header' => 'Along with the form, submit a passport, ID & all',
            'admission_image' => '2.jpg',
        ]);

        DB::table('admission')->insert([
            'header' => 'Completion',
            'sub_header' => 'Submit all the documents required',
            'admission_image' => '3.jpg',
        ]);

        // DB::table('admission')->insert([
        //     'header' => '',
        //     'sub_header' => '',
        //     'admission_image' => '',
        // ]);

        // DB::table('admission')->insert([
        //     'header' => '',
        //     'sub_header' => '',
        //     'admission_image' => '',
        // ]);
    }
}
