<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('welcome', compact('news'));
    }
}
