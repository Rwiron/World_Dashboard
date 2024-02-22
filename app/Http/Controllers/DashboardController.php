<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\country;
use App\Models\countryLanguage;



class DashboardController extends Controller
{
    public function index(){
        $totalCities = City::count();
        $totalCountries = Country::count();
        $totalLanguage = countryLanguage::count();

        $citiesData = City::select('Name', 'Population')->take(10)->get();


        return view('admin.dashboard.list', compact('totalCities', 'totalCountries','totalLanguage','citiesData'));
        //return view('admin.dashboard.list');
    }
}

















// $option = 0; // For total count
        // $period = date('m-Y'); // Current period in mm-yyyy format

        // $result = DB::select('EXEC dbo.CONTRIBUTORSDASHBOARD ?, ?', [$period, $option]);

        // // Debugging: Log the result
        // Log::debug('Stored procedure result', ['result' => $result]);

        // // Assuming the stored procedure returns the count in a specific field
        // $totalContributors = isset($result[0]->total) ? $result[0]->total : 0;

        // return view('admin.dashboard.list', compact('totalContributors'));