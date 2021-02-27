<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    //
    public function index()
    {
        $cities = City::whereHas('state', function ($query) {
            $query->whereId(request()->input('state_id', 0));
        })->pluck('name', 'id');
        return response()->json($cities);
    }
}
