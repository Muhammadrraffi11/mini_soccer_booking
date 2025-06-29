<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;

class HomeController extends Controller
{
    public function index()
    {
        $fields = Field::all(); // ambil data dari tabel fields
        return view('home', compact('fields'));
    }
}

