<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\header;
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

    
}
