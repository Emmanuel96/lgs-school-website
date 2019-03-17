<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use App\header;
use App\addo; 
use App\badore; 
use Notifiable; 
use App\about;
<<<<<<< HEAD
use App\team;
use App\badore;
use App\addo;
=======
use App\youtube;
>>>>>>> c6d150a408d1b0e7692f9cd3b20664fdb8963201
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


    public function editAbout($id)
    {
        $about_details = about::where('about_id', $id)->first();
        return $about_details;

        return view('Admin.about')->with(['about_details'=> $about_details]);     
    }          
    public function updateAbout($id, Request $request)
    {
        $about_details = about::where( 'about_id', '=', $id)->first();
        return $about_details;
        $about_details->year_range = $request->year_range;
        $about_details->year_heading = $request->year_heading;
        $about_details->year_description = $request->year_description;
    

        $about_details->save();
        return redirect()->back();
    }

    public function editPage()
    {
       // $page_details = about::where('')
        return view('Admin.aboutPagedetails');
        
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

    public function editTeam($id)
    {  
        $team_details = team::where( 'team_id', '=', $id)->first();
       // return $team_details;

        return view('Admin.team')->with(['team_details'=> $team_details]); 
    }

    public function updateTeam($id, Request $request)
    {
        $team_details = team::where( 'team_id', '=', $id)->first();
    
        $team_details->staff_name = $request->staff_name;
        $team_details->staff_role = $request->staff_role;
    

        $team_details->save();
        return redirect()->back();
    }

    public function editAddo($id=1)
    {
        $addo_details = addo::where('addo_id','=',$id)->first();
        //$campus_data= DB::table('addo')->selectctRAW('*')->get();
        return view('Admin.addo')->with(['addo_details'=>$addo_details]); //,// ['campus_name1'=> $campus_data[0]->campus_name1,
        /// 'campus_description1' => $campus_data[0]->campus_description1, 
        // 'campus_image1' => $campus_data[0]->campus_image1]);
    }

    public function updateAddo($id, Request $request)
    {
        $addo_details = addo::where( 'addo_id', '=', $id)->first();
    
        $addo_details->campus_name1 = $request->campus_name1;
        $addo_details->campus_description1 = $request->campus_description1;
    

        $addo_details->save();
        return redirect()->back();
    }


    public function editBadore($id=1)
    {
<<<<<<< HEAD
        $badore_details = badore::where('badore_id','=',$id)->first();
        //return $badore_details;
        //$campus_data= DB::table('badore')->selectctRAW('*')->get();
        return view('Admin.badore')->with(['badore_details'=>$badore_details]);// , ['campus_name2'=> $badore_data[0]->campus_name2,
         //'campus_description2' => $badore_data[0]->campus_description2, 
         //'campus_image2' => $badore_data[0]->campus_image2]);
         
=======
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
>>>>>>> c6d150a408d1b0e7692f9cd3b20664fdb8963201
    }

    
    public function updateBadore($id, Request $request)
    {
<<<<<<< HEAD
        $badore_details = badore::where( 'badore_id', '=', $id)->first();

        $badore_details->campus_name2 = $request->campus_name2;
        $badore_details->campus_description2 = $request->campus_description2;
    

        $badore_details->save();
        return redirect()->back();
=======

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
>>>>>>> c6d150a408d1b0e7692f9cd3b20664fdb8963201
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
