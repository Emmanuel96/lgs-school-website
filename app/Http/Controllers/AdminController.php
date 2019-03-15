<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\header;
use App\addo; 
use App\badore; 
use Notifiable; 
use App\about;
use DB;
use Response; 

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function editHeader()
    {

        $header_data = DB::table('header')->selectRaw('*')->get();
        

        return view('Admin.header', ['welcome_text'=> $header_data[0]->welcome_text, 'intro_text' => $header_data[0]->intro_text, 'button_text' => $header_data[0]->button_text]); 
    }

    public function postHeader(Request $request)
    {
        //save the heder thing
        Header::where('id', 1)
        ->update([
            'welcome_text' => $request->welcome_text, 
            'intro_text' => $request->intro_text, 
            'button_text' => $request->button_text, 
        ]);
    }

    public function postAbout(Request $request)
    {
        //save the heder thing
        About::where('About_id', 1)
        ->update([
            'year_range' => $request->year_range, 
            'year_heading' => $request->year_heading, 
            'year_description' => $request->year_description, 
            'display_image'=> $request->display_image,
        ]);
    }

    public function editAbout()
    {
        return view('Admin.about');
        
    }

    public function viewAbout(Request $request )
    {
        $abouts = DB::table('about')->get();
        //dd($abouts);

        return view('Admin.aboutView', ['abouts' => $abouts]);
    }

    public function editEvent()
    {
        return view('Admin.event');
    }

    public function editTeam()
    {
        return view('Admin.team');
    }

    public function editAddo()
    {
        $campus_data= addo::find(1);
    
        return view('Admin.addo' , ['campus_data' => $campus_data ]);

    }

    public function post_addo(Request $request)
    {
        addo::create([
            'campus_name1' => $request->campus_name, 
            'campus_description1' => $request->campus_description, 
            'campus_image1' => $request->campus_image, 
        ]);
        return 'I saved successfully';
    }

    public function post_badore(Request $request)
    {
        badore::create
        ([
            'campus_name2' => $request->campus_name, 
            'campus_description2' => $request->campus_description, 
            'campus_iamge2' => $request->campus_image
        ]);
        return 'I saved successfully';
    }

    public function addo_gallery()
    {
        return 'addo gallery';

    }

    public function badore_gallery()
    {
        return 'badore gallery';
    }

    public function openAccessGallery()
    {
        return 'I got here'; 
    }

    public function editBadore()
    {

        $campus_data= badore::find(1); 

        return view('Admin.badore' , ['campus_data'=> $campus_data]);
    }

    public function viewAddoGallery()
    {
        //open gallery page for now
        return view('addo_gallery');
    }

    public function viewBadoreGallery()
    {
        return view('badore_gallery');
    }

    public function newYoutubeNew()
    {
        return view('Admin.youtubeNew');
    }

    public function showYoutubeView(Request $request)
    {
        $viewVideos = DB::table('youtube')->get();
        return view('Admin.youtubeView',['viewVideos'=>$viewVideos]);
    }

    public function viewTeam(Request $request)
    {
        $teams=DB::table('team')->get();
        return view('Admin.teamView',['teams'=>$teams]);
    }

    public function viewEvent(Request $request)
    {
        $viewEvents=DB::table('event')->get();
        return view('Admin.eventView',['viewEvents'=>$viewEvents]);
    }

    public function viewEventImage(Request $request)
    {
        $images=DB::table('image')->get();
        return view('Admin.eventImage',['images'=>$images]);
    }




    
}
