<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Hotel;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $has_hotel = Hotel::where('owner_id', Auth::id())->first();;
        if ($has_hotel)
        {
            return view('dashboard.index',['has_hotel' => $has_hotel]);
        }
        else 
        {
            return view('dashboard.index');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description'=> 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $temp = $request->all();
        $temp['click_counter'] = 0;
        $temp['owner_id'] = Auth::id();

        Hotel::create($temp);

        return redirect()->route('dashboard.index');
    }
}
