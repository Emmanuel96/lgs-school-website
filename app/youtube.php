<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class youtube extends Model
{
    //
    use Notifiable; 

    protected $table = "youtube"; 

    protected $primaryKey = "youtube_id";

    protected $fillable = [
        'video_name', 'youtube_url', 'video_description','video'
    ];
}
