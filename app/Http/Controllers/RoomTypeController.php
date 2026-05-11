<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(RoomType::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roomType = RoomType::create($request->all());
        return response()->json($roomType);
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomType $roomType)
    {
        return response()->json($roomType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomType $roomType)
    {
        $roomType->update($request->all());
        return response()->json($roomType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomType $roomType)
    {
        $roomType->delete();
        return response()->json([
            'message' => 'RoomType deleted'
        ]);
    }
}
