<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Celebration;

class WelcomeController extends Controller
{
    public function index()
    {
        $foods = Product::where('category', '0')->orderBy('name')->get();
        $drinks = Product::where('category', '1')->orderBy('name')->get();
        $celebrations = Celebration::all();
        return view('index', compact('foods', 'drinks', 'celebrations'));
    }
}
