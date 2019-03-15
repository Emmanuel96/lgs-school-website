<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\header;
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
        $campus_data= DB::table('addo')->selectctRAW('*')->get();
        return view('Admin.addo' , ['campus_name1'=> $campus_data[0]->campus_name1,
         'campus_description1' => $campus_data[0]->campus_description1, 
         'campus_image1' => $campus_data[0]->campus_image1]);
    }

    public function editBadore()
    {
        $campus_data= DB::table('badore')->selectctRAW('*')->get();
        return view('Admin.addo' , ['campus_name2'=> $badore_data[0]->campus_name2,
         'campus_description2' => $badore_data[0]->campus_description2, 
         'campus_image2' => $badore_data[0]->campus_image2]);
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




    
}
