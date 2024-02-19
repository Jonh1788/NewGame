<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresellController extends Controller
{
    public function index(Request $request){
        
        if($request->has("utmcampaign")){

            session(["utmcampaign" => $request->query("utmcampaign")]);
        }

        if($request->has("utm_campaign")){

            session(["utm_campaign" => $request->query("utm_campaign")]);
        }
        
        return view("presell.index");
    }
    public function loss(){
        return view("presell.loss");
    }
}
