<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country; //use Eloquest model Country
use Illuminate\Support\Facades\DB;


class CountriesController extends Controller
{
    //fetching database countries from phpmyadmin
    public function showStates() {
        return DB::table('state')->get();
    }
    //Then create route for this method
}
