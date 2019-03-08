<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UsersTableSeeder::class);
        $this->call(HeaderTableSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(BadoreSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(YoutubeSeeder::class);
        $this->call(AddoSeeder::class);
       // $this->call(TeamSeeder::class);

        Model::reguard();
    }
}
