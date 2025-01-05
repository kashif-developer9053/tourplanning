<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiAssistantController extends Controller
{
    // Travel Assistant
    public function travelAssistant()
    {
        return view('ai.travel');
    }

    // Urdu Assistant
    public function urduAssistant()
    {
        return view('ai.urdu');
    }

    // General Assistant
    public function generalAssistant()
    {
        return view('ai.general');
    }
}
