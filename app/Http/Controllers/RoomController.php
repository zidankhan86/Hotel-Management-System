<?php

namespace App\Http\Controllers;

use App\Models\facilities;
use App\Models\Features;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Features::all();
        $facilities = facilities::all();
        return view('backend.room.room-table',compact('features','facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

        Room::create([
            "category_name"=>$request->category_name,
            "area"=>$request->area,
            "price"=>$request->price,
            "quantity"=>$request->quantity,
            "adult"=>$request->adult,
            "children"=>$request->children,
            "description"=>$request->description,
            "image"=>$imageName,
            "features_id" => implode(',', $request->features_id), 
            "facilities_id" => implode(',', $request->facilities_id),
            
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
