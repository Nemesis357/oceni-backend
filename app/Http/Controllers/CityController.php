<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function getCity(City $city) {
        return $city;
    }
    public function getCities(City $city) {
        return $city->all();
    }

    public function getCityAutoComplete(Request $request) {
        $search = $request->search;
        $cities = [];

        $cities = City::where('name','LIKE', "%{$search}%")
                ->orderBy('created_at', 'DESC')->get();

        
        return $cities;
    }
}
