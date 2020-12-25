<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use DB;

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
        $hotel->increment('click_counter');
        return view('home.show',compact('hotel'));
    }
    
    public function search(Request $request)
	{
		$search = $request->search;
		$hotels = DB::table('hotels')
		->where('name','like',"%".$search."%")
		->paginate(6);

		return view('home.index',['hotels' => $hotels]);
    }
    
    public function rate()
    {
        
    }
}
