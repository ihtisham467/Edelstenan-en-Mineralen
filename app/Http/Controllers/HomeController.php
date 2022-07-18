<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Mineral;
use App\Models\Stone;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stones = Stone::count();
        $minerals = Mineral::count();
        $forms = Form::count();
        return view('home', compact('stones', 'minerals', 'forms'));
    }
}
