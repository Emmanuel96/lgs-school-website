<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\header;
use App\about;
use App\team;
use App\badore;
use App\addo;
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
        $badore_details = badore::where('badore_id','=',$id)->first();
        //return $badore_details;
        //$campus_data= DB::table('badore')->selectctRAW('*')->get();
        return view('Admin.badore')->with(['badore_details'=>$badore_details]);// , ['campus_name2'=> $badore_data[0]->campus_name2,
         //'campus_description2' => $badore_data[0]->campus_description2, 
         //'campus_image2' => $badore_data[0]->campus_image2]);
         
    }

    
    public function updateBadore($id, Request $request)
    {
        $badore_details = badore::where( 'badore_id', '=', $id)->first();

        $badore_details->campus_name2 = $request->campus_name2;
        $badore_details->campus_description2 = $request->campus_description2;
    

        $badore_details->save();
        return redirect()->back();
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
