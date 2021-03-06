<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class team extends Model
{
    //
    use Notifiable; 

    protected $table = "team"; 

    protected $primary_key = "team_id";

    protected $fillable = [
        'staff_name', 'staff_role', 'Twitter_link','facebook_link','Linkedin_link','display_image'
    ];
}
