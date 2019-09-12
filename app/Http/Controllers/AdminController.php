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
use App\event;
use App\team;
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
        about::where('About_id', 1)
        ->update([
            'year_range' => $request->year_range,
            'year_heading' => $request->year_heading,
            'year_description' => $request->year_description,
            'display_image'=> $request->display_image,
        ]);

        return $this->viewAbout($request);
    }

    public function newAbout()
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

    public function editAbout($id)
    {
        $abouts = about::where('about_id', $id)->first();

        return view('Admin.editAbout', [ 'abouts' => $abouts ]);
    }

    public function updateAbout($id, Request $request)
    {
        $abouts = about::where('about_id', $id)->first();
        // dd($request->all());
        DB::table('about')->where('about_id', $id)->update([
            'year_range' => $request->year_range,
            'year_heading' => $request->year_heading,
            'year_description' => $request->year_description,
        ]);

        $abouts->save();

        return redirect()->route('admin.aboutView');

    }

    public function newEvent()
    {
        return view('Admin.event');
    }

    public function viewEvent()
    {
        $viewEvents= event::all();

        return view('Admin.eventView', [ 'viewEvents' => $viewEvents ] );
    }

    public function editEvent($id)
    {
        $events = event::where('Event_id', $id)->first();

        return view('Admin.editEvent', [ 'events' => $events ]);
    }

    public function updateEvent($id, Request $request)
    {
        $events = event::where('Event_id', $id)->first();
        //dd($request->all());
        //return $request->event_name;

        DB::table('event')
        ->where('Event_id', $id)
        ->update([
            'EventName' => $request->event_name,
            'EventDescription' => $request->event_description,

        ]);

        $events->save();
        return redirect()->route('admin.eventView');

    }

    // public function deleteEvent($id)
    // {
    //     $events = event::where('Event_id', $id)->first();
    //     //return $events;

    //     DB::table('event')->delete();

    //     return redirect()->route('admin.eventView');
    // }

    public function viewTeam()
    {
        $teams = team::all();
        //return $teams;

        return view('Admin.teamView',['teams' => $teams ]);
    }

    public function newTeam()
    {
        return view('Admin.team');
    }

    public function editTeam($id)
    {
        $teams = team::where('team_id', $id)->first();

        return view('Admin.editTeam', compact('teams'));
    }

    public function updateTeam($id, Request $request)
    {
        $teams = team::where('team_id', $id)->first();
        //dd($request->all());

        DB::table('team')->where('team_id', $id)->update([
            'staff_name' => $request->staff_name,
            'staff_role' => $request->staff_role,
            'display_image' => $request->display_image,
            'display_image' => ' '
        ]);

        //return $teams;
        $teams->save();

        return redirect()->route('admin.teamView');
    }

    public function editAddo()
    {
        $campus_data= addo::find(1);

        return view('Admin.addo' , ['campus_data' => $campus_data ]);

    }

    public function updateAddo(Request $request)
    {
        $addo = addo::find(1);
        DB::table('addo')->where('addo_id', 1)->update([
            'campus_name1' => $request->campus_name,
            'campus_description1' => $request->campus_description,
            'campus_image1' => $request->campus_image,
        ]);

        $addo->save();
        //return $addo;
        return 'updated successfully!';
    }

    public function updateBadore(Request $request)
    {
        $badore = badore::find(1);
        //dd($request->all());

        DB::table('badore')->where('badore_id', 1)->update([
            'campus_name2' => $request->campus_name,
            'campus_description2' => $request->campus_description,
            'campus_image2' => $request->campus_image,
        ]);

        $badore->save();
        //return $badore;

        return 'updated successfully!';
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
       //return 'updated successfully!';

       return redirect()->route('admin.youtubeView');

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
