<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Faker;
use App\Models\Hotel;
use App\Http\Controllers\UploadController;

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
            return view('dashboard.index',compact('has_hotel'));
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
            'images',
            'phone' => 'required',
            'email' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        $temp = $request->all();

        if (isset($request->images))
        {
            $img_ext = $request->images->extension();
            $img_name = Auth::id(). '_' . time() . '.' .$img_ext;

            $request->images->move('documents/hotel_images', $img_name);
            $temp['images'] = 'documents/hotel_images'.'/'.$img_name;
        }
        else 
        {
            $faker = Faker\Factory::create();
            $temp['images'] = $faker->imageUrl($width = 320, $height = 160);
        }
        
        // $temp['rating'] = 0;
        $temp['click_counter'] = 0;
        $temp['owner_id'] = Auth::id();

        Hotel::create($temp);

        return redirect()->route('dashboard.index')->with('success','Hotel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('dashboard.edit',compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description'=> 'required',
            'address' => 'required',
            'images',
            'phone' => 'required',
            'email' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        $temp = $request->all();
        
        if (isset($request->images))
        {
            $img_ext = $request->images->extension();
            $img_name = Auth::id(). '_' . time() . '.' .$img_ext;

            $request->images->move('documents/hotel_images', $img_name);
            $temp['images'] = 'documents/hotel_images'.'/'.$img_name;
        }
        else 
        {
            $faker = Faker\Factory::create();
            $temp['images'] = $faker->imageUrl($width = 320, $height = 160);
        }

        Hotel::find($id)->update($temp);
        return redirect()->route('dashboard.index')
                        ->with('success','Hotel berhasil di update');
    }

    public function destroy($id)
    {
        $hotel = Hotel::find($id)->delete();
        return redirect()->route('dashboard.index')->with('success','Hotel telah dihapus.');
    }
}
