<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Afolabi AJimoti',
            'email' =>'ajimotiafolabi@yahoo.com',
            'password' => app('hash')->make('ajimoti123'),

        ]);
    }
}
