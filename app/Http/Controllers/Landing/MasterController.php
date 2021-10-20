<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
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
        return view('landing.management', $data);
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
}