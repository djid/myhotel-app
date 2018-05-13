<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

use Searchable;

class AutoComplete extends Controller
{
    public function index()

    {
    	return view('autocomplete');
    }
}
