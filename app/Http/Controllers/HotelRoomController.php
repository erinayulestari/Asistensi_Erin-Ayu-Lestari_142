<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(HotelRoom::with('roomType')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = HotelRoom::create($request->all());
        return response()->json($room);
    }

    /**
     * Display the specified resource.
     */
    public function show(HotelRoom $hotelRoom)
    {
        return response()->json($hotelRoom->load('roomType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HotelRoom $hotelRoom)
    {
        $hotelRoom->update($request->all());
        return response()->json($hotelRoom);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelRoom $hotelRoom)
    {
        $hotelRoom->delete();
        return response()->json([
            'message' => 'HotelRoom deleted'
        ]);
    }
}
