<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    use Notifiable; 

    protected $table = "event"; 

    protected $primary_key = "Event_id";

    protected $fillable = [
        'EventName', 'Display_image', 'EventDescription'
    ];
}
