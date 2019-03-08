<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class youtube extends Model
{
    //
    use Notifiable; 

    protected $table = "youtube"; 

    protected $primary_key = "Youtube_id";

    protected $fillable = [
        'Video_name', 'Youtube_url', 'video_description','video'
    ];
}
