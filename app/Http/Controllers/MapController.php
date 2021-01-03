<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function sendLocation(Request $request)
    {
        // dd($request->latitude);
        return $request->latitude;
    }
}
