<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sitecontroller extends Controller
{
    function index() {
        return view('Page.home');
    }
}