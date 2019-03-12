<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    //
    use Notifiable; 

    protected $table = "team"; 

    protected $primary_key = "Team_id";

    protected $fillable = [
        'staff_name', 'staff_role', 'Twitter_link','facebook_link','Linkedin_link','display_image'
    ];
}
