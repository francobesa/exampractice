<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample; 

class sampleController extends Controller
{
    public function index()
    {
        // Get all inventory items
        $samples = Sample::all(); 

        // Pass the items to the view
        return view('sample.index', compact('samples'));
    }
}
