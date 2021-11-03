<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{

    function index()
    {
        $data['slide']   = Slider::where('page', 'home')
        ->whereStatus(1)
        ->get();

        $data['article'] = Article::whereStatus(1)->get();

        $data['client']  = Client::whereStatus(1)->get();
        $data['talent']  = Gallery::whereStatus(1)
        ->whereSrticleId(4)
        ->get();


        return view('welcome', $data);
    }

    function record()
    {
        $record = DB::table('v_record')->groupBy('srticle_id');
        if ($record->count() > 0 ) {
            $data['record'] = $record->get();
            $data['gallery'] = Gallery::all();
        } else {
            $data['record'] = '';
        }

        return view('landing.record', $data);
    }

    function creativa()
    {
        $data = [];
        return view('landing.creativa', $data);
    }

    function management()
    {
        $data['slide']   = Slider::where('page', 'talent')
        ->whereStatus(1)
        ->get();

        $talent = DB::table('v_talent')->groupBy('srticle_id');
        if ($talent->count() > 0 ) {
            $data['talent'] = $talent->get();
        } else {
            $data['talent']  = '';
        }
        return view('landing.telent-management', $data);
    }

    function entertainment()
    {
        $entertainment = DB::table('v_entertainment')->groupBy('srticle_id');
        if ($entertainment->count() > 0 ) {
            $data['entertainment'] = $entertainment->get();
        } else {
            $data['entertainment']  = '';
        }
        return view('landing.entertainment', $data);
    }

    function profileTalent()
    {
        $data = [];
        return view('landing.profileTalent', $data);
    }

    public function contactUs (){
        return view('landing.contact-us');
    }

    function detail($articlesId)
    {
        $id = base64_decode($articlesId);

        $data['galleries'] = DB::table('v_entertainment')->where('srticle_id', $id)->get();
        $data['articles'] = Article::whereId($id)->first();

        return view('landing.entertainment-detail', $data);
    }
}

