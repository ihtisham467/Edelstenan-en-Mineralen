<?php

namespace App\Http\Controllers;

use App\Models\Stone;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {
        $stones = Stone::with('mineral', 'form')->take(6)->get();
        return view('welcome', compact('stones'));
    }
}
