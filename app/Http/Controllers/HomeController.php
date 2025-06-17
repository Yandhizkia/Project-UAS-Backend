<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::all(); // ambil semua data event dari database
        return view('welcome', compact('events'));
    }
}
