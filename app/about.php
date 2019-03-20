<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    
    protected $table = "about"; 

    protected $primaryKey = "about_id";

    protected $fillable = [
        'year_range', 'year_heading', 'year_description','display_image'
    ];
}
