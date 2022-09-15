<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Http;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::get('https://api.nationalize.io/?name=marcos');
        $personas = Persona::orderBy('edad', 'ASC')->get();
        $persona = $response->json();
        return view('home',\compact('persona','personas'));
        
    }
}
