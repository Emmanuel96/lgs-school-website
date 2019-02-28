<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    use Notifiable; 

    protected $table = "header"; 

    protected $fillable = [
        'welcome_text', 'intro_text', 'button_text'
    ];
}
