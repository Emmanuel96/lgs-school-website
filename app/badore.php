<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class badore extends Model
{
    
    protected $table = "badore"; 

    protected $primaryKey = "badore_id";

    protected $fillable = [
        'campus_name2', 'campus_description2', 'campus_image2'
    ];
}
