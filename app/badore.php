<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class badore extends Model
{
    //
    use Notifiable; 

    protected $table = "badore"; 

    protected $primary_key = "Badore_id";

    protected $fillable = [
        'Campus_name2', 'Campus_description2', 'Campus_image2'
    ];
}
