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
        $this->middleware('auth');
    }

    public function editHeader()
    {

        $header_data = DB::table('header')->selectRaw('*')->get();

        return view('Admin.header', ['welcome_text' => $header_data[0]->welcome_text, 'intro_text' => $header_data[0]->intro_text, 'button_text' => $header_data[0]->button_text]);
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
                'display_image' => $request->display_image,
            ]);

        return $this->viewAbout($request);
    }

    public function newAbout()
    {
        $abouts = about::where('about_id', $id)->first();

        return view('Admin.about', ['abouts' => $abouts]);
    }

    public function viewAbout(Request $request)
    {
        $abouts = DB::table('about')->get();
        //dd($abouts);

        return view('Admin.aboutView', ['abouts' => $abouts]);
    }

    public function editAbout($id)
    {
        $abouts = about::where('about_id', $id)->first();

        return view('Admin.editAbout', ['abouts' => $abouts]);
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
        $viewEvents = event::all();

        return view('Admin.eventView', ['viewEvents' => $viewEvents]);
    }

    public function editEvent($id)
    {
        $events = event::where('Event_id', $id)->first();

        return view('Admin.editEvent', ['events' => $events]);
    }

    public function updateEvent($id, Request $request)
    {
        $events = event::where('Event_id', $id)->first();
        //dd($request->all());
        //return $request->event_name;

        //does this actually return anything?
        if ($request->hasFile('new_display_image')) {
            $display_image = $request->file('new_display_image');
            $img = imagecreatefromjpeg($display_image);

            header('Content-Type: image/jpg');

            //reduce size of tmp image and save
            $img_save = imagejpeg($img, 'images/portfolio/0' . $events->Event_id . '-thumbnail.jpg', 25);
        } else {
            $display_image = $request->current_image;
        }

        DB::table('event')
            ->where('Event_id', $id)
            ->update([
                'EventName' => $request->event_name,
                'EventDescription' => $request->event_description,
                'Display_image' => '0' . $events->Event_id . '-thumbnail.jpg'
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

        return view('Admin.teamView', ['teams' => $teams]);
    }

    public function newTeam()
    {
        return view('Admin.team');
    }

    public function editTeam($id)
    {
        $team = team::where('team_id', $id)->first();

        return view('Admin.editTeam', compact('team'));
    }

    public function updateTeam($id, Request $request)
    {
        $team = team::where('team_id', $id)->first();

        //dd($request->all());
        //SAVE IMAGE
        //firstly reduce the size of the image
        $img = imagecreatefromjpeg($request->file('display_image'));

        header('Content-Type: image/jpeg');
        //reduce size of tmp image and save
        $img_save = imagejpeg($img, 'images/team/' . $id . '.jpeg', 25);

        //END SAVE IMAGE

        // return 'i got here';
        DB::table('team')->where('team_id', $id)->update([
            'staff_name' => $request->staff_name,
            'staff_role' => $request->staff_role,
            'display_image' => $id . '.jpeg'
        ]);

        //return $teams;
        $team->save();

        return redirect()->route('admin.teamView');
    }

    public function editAddo()
    {
        $campus_data = addo::find(1);

        return view('Admin.addo', ['campus_data' => $campus_data]);
    }

    public function updateAddo(Request $request)
    {
        $addo = addo::find(1);

        if ($request->file('new_campus_image') != null) {
            $img = imagecreatefromjpeg($request->file('new_campus_image'));

            header('Content-Type: image/jpeg');
            //reduce size of tmp image and save
            $img_save = imagejpeg($img, 'images/campus1.jpg', 25);
        }

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

        if ($request->file('new_campus_image') != null) {
            $img = imagecreatefromjpeg($request->file('new_campus_image'));

            header('Content-Type: image/jpeg');
            //reduce size of tmp image and save
            $img_save = imagejpeg($img, 'images/campus2.jpg', 25);
        }

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

        $campus_data = badore::find(1);

        return view('Admin.badore', ['campus_data' => $campus_data]);
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

    public function createNewVideo()
    {
        DB::table('youtube')->insert([
            'video_name' => 'ROAR2',
            'youtube_url' => 'https://youtu.be/8OERJQ4ssoU',
            'video_description' => 'Watch how these kids make a beautiful cover to Roar by Katy Perry with an Africanized beat...',
            'video' => '',
            'display_image' => '01-thumbnail.jpg',
            'image_description' => 'Illustration',
        ]);
    }
    public function addNewYoutubeVideo(Request $request)
    {
        return $request->all();
        return redirect()->route('Admin.youtubeView');
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


        return view('Admin.editYoutubeVideos', ['videos' => $videos]);
    }

    public function updateYoutubeVideos($id, Request $request)
    {
        $videos = youtube::where('youtube_id', $id)->first();

        if ($request->file('display_image') != null) {
            $img = imagecreatefromjpeg($request->file('display_image'));

            header('Content-Type: image/jpeg');
            //reduce size of tmp image and save
            $img_save = imagejpeg($img, 'images/youtube/' . $id . '.jpg', 25);
        }

        DB::table('youtube')
            ->where('youtube_id', $id)
            ->update([
                'display_image' => $id . '.jpg',
                'video_name' => $request->video_name,
                'youtube_url' => $request->youtube_url,
                'video_description' => $request->video_description,
            ]);

        $videos->save();
        //return 'updated successfully!';

        return redirect()->route('admin.youtubeView');
    }

    public function viewEventImage($id, Request $request)
    {
        $images = DB::table('event_gallery')->where('event_id', '=', $id)->get();
        // return $images;

        return view('Admin.eventImage', ['images' => $images]);
    }

    public function editEventImage($id, Request $request)
    {
        $eventImage = DB::table('event_gallery')->where('event_image_id', '=', $id)->first();
        return view('Admin.editEventImage', ['events' => $eventImage]);
    }

    public function updateEventImage($id, Request $request)
    {

        if ($request->hasFile('new_event_image')) {
            $display_image = $request->file('new_event_image');
            $img = imagecreatefromjpeg($display_image);

            header('Content-Type: image/jpg');

            //reduce size of tmp image and save
            $img_save = imagejpeg($img, 'images/' . $id . '.jpg', 25);
        } else {
            $display_image = $request->current_image;
        }

        $eventImage = DB::table('event_gallery')
            ->where('event_image_id', '=', $id)
            ->update([
                'event_image' => $id . '.jpg'
            ]);


        $eventImage = DB::table('event_gallery')->where('event_image_id', '=', $id)->first();
        $eventImages = DB::table('event_gallery')->where('event_id', '=', $eventImage->event_id)->get();
        return view('Admin.eventImage', ['images' => $eventImages]);
    }

    public function admin_badore_images()
    {
        return view('Admin.badoreImages');
    }

    public function admin_addo_images()
    {
        return view('Admin.addoImages');
    }

    public function admissionCreation()
    {
        DB::table('admission')->delete();
        DB::table('admission')->insert([
            'header' => 'Interested? ',
            'sub_header' => 'You can visit either our Badore or our Addo branch to pick up our application form',
            'admission_image' => '1.jpg',
        ]);

        DB::table('admission')->insert([
            'header' => 'Placement Test',
            'sub_header' => 'Every applicant must write a placement test; a well designed and strucutred test for determining the class for our children.',
            'admission_image' => '2.jpg',
        ]);

        DB::table('admission')->insert([
            'header' => 'Required Documents',
            'sub_header' => 'Submit all required documents. The required documents will be communicated if you reach out to our contacts.',
            'admission_image' => '3.jpg',
        ]);

        return redirect('/');
    }

    public function increaseEventNo()
    {
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 0; $j < 2; $j++) {
                DB::table('event_gallery')->insert([
                    'event_id' => $i,
                    'event_image' => 'media.jpg',
                ]);
            }
        }

        return redirect('/');
    }
}
