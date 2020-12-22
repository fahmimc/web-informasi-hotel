<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::latest()->paginate(6);
        return view('home.index',compact('hotels'));
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('home.show',compact('hotel'));
    }
    
    public function search()
    {
        
    }
}
