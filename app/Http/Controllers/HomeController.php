<?php

namespace App\Http\Controllers;
use App\Product;
use App\Departement;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->Departement) {
            $products = product::with('departement')->whereHas('departement', function ($query) {
                $query->where('slug', request()->Departement);
            })->get();
           $departement = Departement::all();
        } else {            
            $products = product::inRandomOrder()->paginate(9);
            $departement = Departement::all();
        }       

        return view('landing-page')->with([
            'products' => $products,
            'departement' => $departement,
        ]);
        
        
    }
}
