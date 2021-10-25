<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Client;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{

    function index()
    {
        $data['slide']      = Slider::where('page', 'home')
        ->whereStatus(1)
        ->get();

        $data['article'] = Article::whereStatus(1)->get();

        $data['client']  = Client::whereStatus(1)->get();

        return view('welcome', $data);
    }

    function record()
    {
        $data = [];
        return view('landing.record', $data);
    }

    function creativa()
    {
        $data = [];
        return view('landing.creativa', $data);
    }

    function management()
    {
        $data = [];
        return view('landing.telent-management', $data);
    }

    function entertainment()
    {
        $data = [];
        return view('landing.entertainment', $data);
    }

    function profileTalent()
    {
        $data = [];
        return view('landing.profileTalent', $data);
    }

    public function contactUs (){
        return view ('landing.contact-us');
    }
}

