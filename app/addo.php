<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class addo extends Model
{
    protected $table = "addo"; 

    protected $primaryKey = "addo_id";

    protected $fillable = [
        'campus_name1', 'campus_description1', 'campus_image1'
    ];
}
