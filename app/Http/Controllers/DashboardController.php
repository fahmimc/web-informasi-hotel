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
        $uid = Auth::user()->id;
        $has_hotel = Hotel::where('owner_id', $uid)->first();;
        if ($has_hotel)
        {
            return view('dashboard.index',['has_hotel' => $has_hotel]);
        }
        else 
        {
            return view('dashboard.index');
        }
    }
}
