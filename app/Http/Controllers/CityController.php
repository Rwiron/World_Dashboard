<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $totalCities = City::count(); // Fetch the total number of cities

        return view('admin.dashboard.list', compact('totalCities')); // Return the total to a view
    }
}