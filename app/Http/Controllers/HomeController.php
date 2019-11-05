<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\header;
use App\youtube;
use App\event;
use App\team;
use App\about;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $campus_data = DB::table('addo')->selectRaw('*')->get();
        //return $campus_data[0]->campus_name1;
        $badore_data = DB::table('badore')->selectRaw('*')->get();
       // return $badore_data[0]->campus_name2;

        $header_data = DB::table('header')->selectRaw('*')->get();
        // return $header_data[0]->welcome_text;
        $about_details = about::where('about_id', '$id')->first();
        // return $about_details;

        //get details using the model
        $youtubes = youtube::all();
        $events = event::all();
        $teams = team::all();

        return view('home', ['welcome_text'=> $header_data[0]->welcome_text,

        'intro_text' => $header_data[0]->intro_text,
        'button_text' => $header_data[0]->button_text,
        'campus_name1' =>  $campus_data[0]->campus_name1,
        'campus_name2'=> $badore_data[0]->campus_name2,
        'campus_description1' => $campus_data[0]->campus_description1,
         'campus_image1' => $campus_data[0]->campus_image1,
         'campus_description2' => $badore_data[0]->campus_description2,
         'campus_image2' => $badore_data[0]->campus_image2,
         'about_details' => $about_details,
         'abouts' => about::all(),
         'teams' => team::all(),
         'events' => event::all(),
         'youtubes' => $youtubes,
         'eventsImages' => DB::table('event_gallery')->get()->toArray(),
         ]);
    }


    public function index()
    {
        $campus_data = DB::table('addo')->selectRaw('*')->get();
        //return $campus_data[0]->campus_name1;
        $badore_data = DB::table('badore')->selectRaw('*')->get();
       // return $badore_data[0]->campus_name2;

        $header_data = DB::table('header')->selectRaw('*')->get();
        // return $header_data[0]->welcome_text;
        $about_details = about::where('about_id', '$id')->first();
        // return $about_details;

        //get details using the model
        $youtubes = youtube::all();
        $events = event::all();
        $teams = team::all();

        return view('home', ['welcome_text'=> $header_data[0]->welcome_text,

        'intro_text' => $header_data[0]->intro_text,
        'button_text' => $header_data[0]->button_text,
        'campus_name1' =>  $campus_data[0]->campus_name1,
        'campus_name2'=> $badore_data[0]->campus_name2,
        'campus_description1' => $campus_data[0]->campus_description1,
         'campus_image1' => $campus_data[0]->campus_image1,
         'campus_description2' => $badore_data[0]->campus_description2,
         'campus_image2' => $badore_data[0]->campus_image2,
         'about_details' => $about_details,
         'abouts' => about::all(),
         'teams' => team::all(),
         'events' => event::all(),
         'youtubes' => $youtubes,
         'eventsImages' => DB::table('event_gallery')->get()->toArray(),
         ]);
    }
}
