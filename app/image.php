<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    //
    use Notifiable; 

    protected $table = "image"; 

    protected $primary_key = "image_id";

    protected $fillable = [
        'display_image', 'image_description'
    ];
}
