<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class addo extends Model
{
    //
    use Notifiable; 

    protected $table = "addo"; 

    protected $primary_key = "Addo_id";

    protected $fillable = [
        'Campus_name1', 'Campus_description1', 'Campus_image1'
    ];
}
