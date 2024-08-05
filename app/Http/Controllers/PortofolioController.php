<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
    }
    public function education()
    {
        return view("education");
    }
    public function experience()
    {
        return view("experience");
    }
    public function interests()
    {
        return view("interests");
    }
    public function skills()
    {
        return view("skills");
    }
}
