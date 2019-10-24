<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class FitnessController extends Controller
{
    public function getRefreshFitness(){
		$fitnesses = DB::table('fitness')->join('fitnesscategory', 'fitness.FitnessCategoryID', '=', 'fitnesscategory.id')->join('fitnesslocation', 'fitness.FitnessLocationID', '=', 'fitnesslocation.id')->select('fitness.FitnessName', 'fitnesscategory.FitnessCategoryName', 'fitnesscategory.FitnessCategoryDescription', 'fitnesslocation.FitnessLocationName', 'fitness.FitnessPrice')->get();
        return view('fitnesslist', compact("fitnesses"));
	}
}
