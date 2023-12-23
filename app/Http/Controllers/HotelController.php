<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
class HotelController extends Controller
{
    public function hotels(){
        $hotels = Hotel::all();
        return response()->json(
            [
                'hotels' => $hotels,
                'message' => 'Hotels',
                'code' => 200
            ]
            );
    }

    public function getHotel($id){
        $hotel = Hotel::find($id);
        return response()->json($hotel);
    }
    public function saveHotel(Request $request){
        $hotel = new Hotel();
        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->save();
        return response()->json([
            'message' => 'Hotel Created Successfully',
            'code' => 200
        ]);
    }
    public function deleteHotel($id){
        $hotel = Hotel::find($id);
        if($hotel){
            $hotel->delete();
            return response()->json([
                'message' => 'Hotel Deleted Successfully',
                'code' => 200
            ]);
        }else {
            return response()->json([
                'message' => "Hotel with id:$id does not exists"
            ]);
        }
    }
    public function updateHotel ($id, Request $request) {
        $hotel = Hotel::where('id', $id)->first();
        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->save();
        return response()->json([
            'message' => 'Hotel Updated Successfully',
            'code' => 200
        ]);
    }
}
