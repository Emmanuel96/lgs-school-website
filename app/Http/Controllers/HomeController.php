<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use App\header; 
use App\youtube;

class HomeController extends Controller
{
    public function home()
    {
        $campus_data = DB::table('addo')->selectRaw('*')->get();
        //return $campus_data[0]->campus_name1;

        $badore_data = DB::table('badore')->selectRaw('*')->get();
       // return $badore_data[0]->campus_name2;
        
        $header_data = DB::table('header')->selectRaw('*')->get();
        // return $header_data[0]->welcome_text; 

        $youtubes = youtube::all();

        return view('home', ['welcome_text'=> $header_data[0]->welcome_text, 
        
        'intro_text' => $header_data[0]->intro_text, 
        'button_text' => $header_data[0]->button_text,
        'campus_name1' =>  $campus_data[0]->campus_name1,
        'campus_name2'=> $badore_data[0]->campus_name2,
        'campus_description1' => $campus_data[0]->campus_description1, 
         'campus_image1' => $campus_data[0]->campus_image1,
         'campus_description2' => $badore_data[0]->campus_description2, 
         'campus_image2' => $badore_data[0]->campus_image2,
         'youtubes' => $youtubes,
         ]);
    }


}
