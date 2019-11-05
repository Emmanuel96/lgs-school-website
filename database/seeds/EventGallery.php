
<?php

use Illuminate\Database\Seeder;

class EventGallery extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=8; $i++){
            for( $j = 0; $j<8 ; $j++){
                DB::table('event_gallery')->insert([
                    'event_id' => $i,
                    'event_image' => 'media.jpg',
                ]);
            }
        }
    }
}
