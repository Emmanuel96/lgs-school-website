<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use App\header;
use App\addo; 
use App\badore; 
use Notifiable; 
use App\about;
use App\youtube;
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

    public function postAbout($id, Request $request)
    {
        //$about_details= about::where('about_id', $id)->first();
        
       // return $request->display_image;
        //save the heder thing
        About::where('about_id', $id)
        ->update([
            'year_range' => $request->year_range, 
            'year_heading' => $request->year_heading, 
            'year_description' => $request->year_description, 
            'display_image'=> $request->display_image,
        ]);

        return $this->viewAbout($request); 
    }

    public function editAbout($id)
    {
        $abouts = about::where('about_id', $id)->first();

        return view('Admin.about' , ['abouts'=> $abouts]);

        
    }

    public function viewAbout(Request $request )
    {
        $abouts = DB::table('about')->get();
        //dd($abouts);

        return view('Admin.aboutView', ['abouts' => $abouts]);
    }

    
    public function editPage()
    {
        return view('Admin.aboutPagedetails'); 

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
        $addo_campus = addo::find(1); 
        $addo_campus->campus_name1 = $request->campus_name;
        $addo_campus->campus_description1 = $request->campus_description; 
        $addo_campus->campus_image1 = $request->campus_image;

        $addo_campus->save(); 

        
        return $this->editAddo(); 
    }

    public function post_badore(Request $request)
    {
        badore::create
        ([
            'campus_name2' => $request->campus_name, 
            'campus_description2' => $request->campus_description, 
            'campus_iamge2' => $request->campus_image
        ]);
        $badore = badore::find(1); 
        $badore->campus_name2 = $request->campus_name; 
        $badore->campus_description2 = $request->campus_name; 
        $badore->campus_image2 = $request->campus_image; 

        $badore->save(); 

        return $this->editBadore();
    }

    public function addo_gallery()
    {
        return view('Admin.addoImages'); 

    }

    public function badore_gallery()
    {
        return view('Admin.badoreImages');
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
        $viewVideos = youtube::all();
       // return $viewVideos;
        return view('Admin.youtubeView')->with(compact('viewVideos'));
    }

    public function editYoutubeVideos($id)
    {
        $videos = youtube::where('youtube_id', $id)->first();


        return view('Admin.editYoutubeVideos', ['videos'=> $videos]);
    }

    public function updateYoutubeVideos($id, Request $request)
    {
        
        $videos = youtube::where('youtube_id', $id)->first();

        DB::table('youtube')
        ->where('youtube_id', $id)
        ->update([
            'video_name' => $request->video_name,
            'youtube_url' => $request->youtube_url,
            'video_description' => $request->video_description,
        ]); 

        $videos->save();
       

        return 'updated successfully!';
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


    public function admin_badore_images()
    {
        return view('Admin.badoreImages'); 
    }

    public function admin_addo_images()
    {
        return view('Admin.addoImages');
    }

}