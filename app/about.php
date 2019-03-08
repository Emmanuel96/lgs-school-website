<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    
    protected $table = "about"; 

    protected $primary_key = "About_id";

    protected $fillable = [
        'year_range', 'year_heading', 'year_description','display_image'
    ];
}
