<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use App\heder; 

class HomeController extends Controller
{
    public function home()
    {
        $header_data = DB::table('header')->selectRaw('*')->get();
        // return $header_data[0]->welcome_text; 

        return view('home', ['welcome_text'=> $header_data[0]->welcome_text, 'intro_text' => $header_data[0]->intro_text, 'button_text' => $header_data[0]->button_text]);
    }
}
