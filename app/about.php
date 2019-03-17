<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class about extends Model
{
    
    protected $table = "about"; 

    protected $primary_key = "about_id";

    protected $fillable = [
        'year_range', 'year_heading', 'year_description','display_image','header','footer'
    ];
}
