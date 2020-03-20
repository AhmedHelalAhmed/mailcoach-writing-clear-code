<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($event)
    {

        if($event=='clicked')
        {
            dd('hit clicked event');
            return;
        }

        if($event=='opened')
        {
            dd('hit opened event');
            return;
        }

        if($event=='failed')
        {
            dd('hit failed event');
            return;
        }
    }
}
